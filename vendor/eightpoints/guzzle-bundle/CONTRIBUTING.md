# Contributing to Symfony GuzzleBundle

👍 First off, thanks for taking the time to contribute! 🎉

## Reporting a Bug
Whenever you find a bug in this bundle, we kindly ask you to report it. It helps us make a better EightPointsGuzzleBundle.
Report it using the official bug [tracker][1] and follow some basic rules:

- Use the title field to clearly describe the issue
- Describe the steps needed to reproduce the bug with short code examples (providing a unit test that illustrates the bug is best)
- Give as much detail as possible about your environment (PHP version, GuzzleBundle version, Symfony version, ...)


## Adding Feature
You can request a new feature by submitting an issue to our [GitHub Repository][1].
If you would like to implement a new feature, please submit an issue with a proposal for your work first, to be sure that we can use it. Please consider what kind of change it is:

- For a Major Feature, first open an issue and outline your proposal so that it can be discussed. This will also allow us to better coordinate our efforts, prevent duplication of work, and help you to craft the change so that it is successfully accepted into the project.
- Small Features can be crafted and directly submitted as a Pull Request.


## Coding Standards

### General rule
When contributing code to this bundle, you must follow the [Symfony coding standards][2]. To make a long story short, here is the golden rule: Imitate the existing Symfony code.
Most open-source Bundles and libraries used by Symfony also follow the same guidelines, and you should too.  
Remember that the main advantage of standards is that every piece of code looks and feels familiar, it's not about this or that being more readable.

### Annotations
Rules:
- write full path of classes
- write `@param` if method has parameters
- write `@return`
- don't align parameters

Example:
```php
/**
 * @param array $config
 * @param \EightPoints\Bundle\GuzzleBundle\Log\LoggerInterface $logger
 *
 * @return bool
 */
public function randomMethod(array $config, LoggerInterface $logger) : bool
{
    // method logic
    
    return true;
}
```

## Testing

### PHPUnit
Though we have GitHub Actions running tests on every push you do, it would be nice to make sure you run PHPUnit locally before push to upstream.  
The easiest way to run tests is to execute this in project root directory - `vendor/bin/simple-phpunit`

### Infection PHP
For now we can not include Infection PHP in the repo, because some Symfony 2.7 dependencies are not compatible with Infection. 
But you can always install Infection globally and run it for project with:
- `composer global require infection/infection`
- update your $PATH variable in `~/.bash_profile` to contain path to composer binary files `~/.composer/vendor/bin`. Beware for some systems path might be slightly different!
- `infection --threads=4` in the project root

[1]: https://github.com/8p/EightPointsGuzzleBundle/issues
[2]: https://symfony.com/doc/current/contributing/code/standards.html
