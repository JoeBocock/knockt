<br/>
<p align="center"><img src="logo.png" width="250"></p>

<p align="center"> 
    <a href="https://twitter.com/Joe_Bocock">
        <img src="https://img.shields.io/twitter/follow/Joe_Bocock?style=social&logo=twitter" alt="Twitter">
    </a>
    <a href="https://github.com/JoeBocock/knockt/blob/master/LICENSE">
        <img src="https://img.shields.io/static/v1?label=Build&message=passing&color=success" alt="Build">
    </a>
    <a href="https://github.com/JoeBocock/knockt/blob/master/LICENSE">
        <img src="https://img.shields.io/github/license/JoeBocock/knockt" alt="License">
    </a>
    <a href="https://github.com/JoeBocock/knockt/issues">
        <img src="https://img.shields.io/github/issues/JoeBocock/knockt" alt="Issues">
    </a>
    <img src="https://img.shields.io/badge/Elementary-My%20dear%20Watson-orange" alt="Elementary">
</p>

# About Knockt

Knockt is a learning resource API that simulates the processes of vending machines.

This concept provides a lot of potential to leverage Eloquent relationships and utilise many of the features people often see as ✨*magic*✨.

This purely exists to demonstrate the features of Laravel out of the box and to be used as a teaching tool for members of my workplace team. I aim to use everything available in Laravel in some capacity while attempting to do it as simply as possible. With the previous being said, it should hopefully lead to a great teaching resource eventually.

As this project continues to grow and be worked on I will update this README with endpoint information etc however if I find that it gets too cluttered, I may move it off to another more dedicated site.

-   [Vending Machines](#vending-machines)
-   [Machine Rows](#rows)
-   [Row Slots](#row-slots)
-   [Slot Product](#slots)
-   [Product Stock](#product)

## Developement Notes

I attempt to keep to Laravel as much as is possible while designing an API. I have changed very little base Laravel code and tried to utilise all features as much as possible (without bloating it for the sake of using feautes).

One of the only changes I've made is extending `\Illuminate\Foundation\Http\FormRequest` with `\App\Common\API\KnocktFormRequest` and overriding the `failedValidation` to always return a JSON error bag regardless of incoming request type.

I'm also following the [Microsoft API Best Practices](https://docs.microsoft.com/en-us/azure/architecture/best-practices/api-design) document as much as possible as I believe it to be one of the clearest design methodologies for API response structure.

## Getting Setup

Whether you've decided to clone it to have a mess around or would like to use this as a teaching tool, getting setup should be incredibly straight forward.

I personally develop on MacOS so I leverage [Valet](https://laravel.com/docs/7.x/valet). For a database I use a locally hosted one managed by a tool called [DBngin](https://dbngin.com/). Finnaly just configure your ENV file accordingly. 

I've nested the migration of the database into the running of PHP Unit. So if you plan to utilise PHP unit, simply run the entire feature set and your database will be ready to go (including seeded!). If you don't plan to use PHP Unit testing, simply run `php artisan migrate --seed`.

If you happen to be on Linux, fear not! cpriego has created [Valet Linux](https://github.com/cpriego/valet-linux).

Finally, if you're on Windows I would suggest looking into Docker or Vagrant. Note that Laravel has an in house box called [Homestead](https://laravel.com/docs/7.x/homestead) for Vagrant and you can get setup relatively quickly.

## Vending Machines

| Method | Path                 | Description                 |
|--------|----------------------|-----------------------------|
| GET    | `/api/machines`      | Lists all Machines          |
| POST   | `/api/machines`      | Store a new machine         |
| GET    | `/api/machines/{id}` | Retrieve a specific machine |
| PUT    | `/api/machines/{id}` | Update an existing machine  |
| DELETE | `/api/machines/{id}` | Remove an existing machine  |

## Rows

-   Belongs to a Machine
-   Has many Slots

## Slots

-   Belongs to a Row
-   Has a Product

## Product

-   Belongs to many Slots
-   Contains a running stock amount
