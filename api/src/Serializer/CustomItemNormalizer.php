<?php
// api/src/Serializer/CustomItemNormalizer.php

namespace App\Serializer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

final class CustomItemNormalizer implements NormalizerInterface, DenormalizerInterface
{
    const ENTITY_NAMESPACE = 'App\Entity';

    private $normalizer;
    private $default_serializer;

   public function __construct(NormalizerInterface $normalizer, ArrayDenormalizer $default_serializer)
    {
        if (!$normalizer instanceof DenormalizerInterface) {
            throw new \InvalidArgumentException('The normalizer must implement the DenormalizerInterface');
        }

        $this->normalizer = $normalizer;
        $this->default_serializer = $default_serializer;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        // Unactive denormalize when POST an entity (add a new)
        if ($context['operation_type'] === 'collection' &&
            $context['collection_operation_name'] === "post") {
            return $data;

        } else {
            return $this->normalizer->denormalize($data, $class, $format, $context);
        }
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->normalizer->supportsDenormalization($data, $type, $format);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $result =  $this->normalizer->normalize($object, $format, $context);

        if (('json' !== $format && 'csv' !== $format) || !is_array($result)) {
            return $result;
        }

        foreach ($result as $key => $value) {
            // When data raw
            if($key === "data" && is_array($value)){
              if(isset($value['@odata.etag'])) {
                  unset($value['@odata.etag']);
              }
              $result = $value + $result;
              unset($result['data']);
            }else {
                $accessorName = 'get' . ucfirst($key);
                if (null !== $obj_value = $object->{$accessorName}()) {
                    if (is_object($obj_value)) {
                        $entity_namespace = substr(get_class($obj_value), 0, strrpos(get_class($obj_value), '\\'));
                        if ($entity_namespace === self::ENTITY_NAMESPACE) {
                            $result[$key] = [
                                'data' => $this->normalizer->normalize($obj_value, $format)
                            ];
                        }
                    }
                }
            }
        }

        return $result;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->normalizer->supportsNormalization($data, $format);
    }
}