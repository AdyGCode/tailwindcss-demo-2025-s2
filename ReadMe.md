# TailwindCSS Demo 2025/S2

Details to come

## First Use

To use this repository, use the following steps:

- Create a local copy
- cd into the folder
- install the packages
- run the dev server

## Create Local Copy & Install Requirements

Open a command line and run:

```shell
git clone https://github.com/AdyGCode/tailwindcss-demo-2025-s2
cd tailwindcss-demo-2025-s2 
```

> **IMPORTANT**
> 
> You will need Node.js version 22.18+ or 24.4+ to run vite and other NPM
> packages.
>
> Also, the repository is also configured to render PHP files.

## Run the Development Server

We are using Composer, VITE and TailwindCSS' CLI to run a development server.


### Vite

Vite is like "make" on Linux and for other systems, and acts as a build application that
performs actions automatically.

Vite's configuration provides:

- dev - used to automatically watch and compile CSS/JS when developing
- build - used to create production copies of the CSS/JS

### Composer

Composer is the equivalent to NPM for Node.js. It is a package manager for PHP.

We are using it to run multiple commands at once so we do not have to run multiple terminal instances. 

Composer provides:


### Install Dependencies

Before run the development server, we need to:

- Install any Composer package requirements
- Install any Node.js package requirements
- 
Execute the following commands:

```shell
npm install -g @tailwindcss/language-server
```
This installs a helper for PhpStorm and WebStorm.

```shell
npm install
composer install
```

These will install the packages required by composer and node.


### Running the Development Server

In the same shell execute:

```shell
composer run dev
```

Open a browser and go to: http://localhost:8000/

- Localhost is the local computer/host (the one in front of you)
- 8000 is the port that Vite is listening on for requests

# Components & Icons

We have been using the following libraries to help with this demo:

- Components are from [HyperUI - https://www.hyperui.dev/](https://www.hyperui.dev/).
- Icons are from [FontAwesome (Free) - https://fontawesome.com](https://fontawesome.com)

There are MANY possible options for UI components and Icons.

When selecting, please make sure you are using UI components that are TailwindCSS v4
compatible.

Any costs in using any of the components, icons and other sources are the responsibility of
the user, and not the authors.

> In your About page, please provide a link back to the source of ANY components, icons etc.
> you use in your designs.

# Resources

https://dev.to/masumparvej/7-free-font-awesome-alternatives-in-2025-138e

https://octet.design/journal/free-icon-sets/

https://vite-php.nititech.de/get-started

https://github.com/donnikitos/vite-plugin-php
