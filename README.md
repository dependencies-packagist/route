<a id="readme-top"></a>

# Routing Annotation

This package provides routing annotation specifications.

[![GitHub Tag][GitHub Tag]][GitHub Tag URL]
[![Total Downloads][Total Downloads]][Packagist URL]
[![Packagist Version][Packagist Version]][Packagist URL]
[![Packagist PHP Version Support][Packagist PHP Version Support]][Repository URL]
[![Packagist License][Packagist License]][Repository URL]

<!-- TABLE OF CONTENTS -->
<details>
    <summary>Table of Contents</summary>
    <ol>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#contributing">Contributing</a></li>
        <li><a href="#contributors">Contributors</a></li>
        <li><a href="#license">License</a></li>
    </ol>
</details>

<!-- INSTALLATION -->

## Installation

You can install the package via [Composer]:

```bash
composer require annotation/route
```

<p align="right">[<a href="#readme-top">back to top</a>]</p>

| Attribute         | TARGET_CLASS | TARGET_METHOD | IS_REPEATABLE | Interface        |
|-------------------|--------------|---------------|---------------|------------------|
| Config            | Yes          | -             | -             | Config           |
| Domain            | Yes          | -             | -             | Routing          |
| Prefix            | Yes          | -             | -             | Routing          |
| Group             | Yes          | -             | Yes           | Routing          |
| Resource          | Yes          | -             | -             | Routing,Resource |
| Singleton         | Yes          | -             | -             | Routing,Resource |
| Middleware        | Yes          | Yes           | -             | Routing          |
| WithoutMiddleware | Yes          | Yes           | -             | Routing          |
| WithTrashed       | Yes          | Yes           | -             | Routing          |
| ScopeBindings     | Yes          | Yes           | -             | Routing          |
| Defaults          | Yes          | Yes           | Yes           | Routing          |
| Where             | Yes          | Yes           | Yes           | Routing,Where    |
| Route             | -            | Yes           | Yes           | Routing,Route    |
| Fallback          | -            | Yes           | -             | Routing          |

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">[<a href="#readme-top">back to top</a>]</p>

<!-- CONTRIBUTORS -->

## Contributors

Thanks goes to these wonderful people:

<a href="https://github.com/dependencies-packagist/route/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=dependencies-packagist/route" alt="contrib.rocks image" />
</a>

Contributions of any kind are welcome!

<p align="right">[<a href="#readme-top">back to top</a>]</p>

<!-- LICENSE -->

## License

Distributed under the project_license. Please see [License File] for more information.

<p align="right">[<a href="#readme-top">back to top</a>]</p>

[GitHub Tag]: https://img.shields.io/github/v/tag/dependencies-packagist/route

[Total Downloads]: https://img.shields.io/packagist/dt/annotation/route?style=flat-square

[Packagist Version]: https://img.shields.io/packagist/v/annotation/route

[Packagist PHP Version Support]: https://img.shields.io/packagist/php-v/annotation/route

[Packagist License]: https://img.shields.io/github/license/dependencies-packagist/route

[Packagist URL]: https://packagist.org/packages/annotation/route

[Repository URL]: https://github.com/dependencies-packagist/route

[GitHub Open Issues]: https://github.com/dependencies-packagist/route/issues

[GitHub Tag URL]: https://github.com/dependencies-packagist/route/tagsv

[License File]: https://github.com/dependencies-packagist/route/blob/main/LICENSE

[Composer]: https://getcomposer.org
