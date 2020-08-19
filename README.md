[![Actions Status](https://github.com/josephmarino/portfolio/workflows/build/badge.svg)](https://github.com/josephmarino/portfolio/actions?query=workflow:build) [![Actions Status](https://github.com/josephmarino/portfolio/workflows/deploy/badge.svg)](https://github.com/josephmarino/portfolio/actions?query=workflow:deploy) [![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/josephmarino/portfolio/blob/master/LICENSE)

### A portfolio website with a clean design optimized to load fast and display a lot of content
This repo contains a templatized version of the source code to my portfolio website, [josephmarino.net](https://josephmarino.net). When developing this portfolio I used the following libraries: [bootstrap](https://github.com/twbs/bootstrap), [jquery](https://github.com/jquery/jquery), [jquery-easing](https://github.com/gdsmith/jquery.easing), [mozilla pdf.js](https://github.com/mozilla/pdf.js), SVG icons from [font awesome](https://github.com/FortAwesome/Font-Awesome), and open sans and noto hk fonts from [google](https://github.com/google/fonts).

I templatized the source code and the content because (a) I wanted to help make it easier for anyone to modify, and (b) I wanted to make it easy to license under an open source license. A lot of the content on josephmarino.net could not be licensed with an open source license, so creating a templatized version with genericized content was a clean way to license this portfolio under an open source license. The the only difference between the source code in this repo and the source code deployed to josephmarino.net is the content. 

When viewing the source code, you will see genericized content such as lorem ipsum text and local paths to sample images and pdfs. The source code and content to this portfolio is licensed under the [MIT License](https://github.com/josephmarino/portfolio/blob/master/LICENSE), so feel free to use it in your project :smiley: 

### Installation

<details><summary>Install and run on your local machine (Ubuntu Linux)</summary>
<p>

The below installation instructions will help you get the source code up and running on a local machine in your development environment, such as a laptop running Ubuntu.

#### Prerequisites:

> php (cli version)<br>
> wget

On Ubuntu, you can install the prerequisites with the following pre-compiled binary packages:

> php7.4-cli<br>
> wget

#### OK; Let's install the prereqs and source code from the command line interface (CLI):

If the php7.4-cli and wget packages are not installed on your system, you can install them by typing the following command:

```bash
sudo apt install php7.4-cli wget
```
After the php and wget packages are installed, type the following command to fetch the latest release tar file from this repo: 

```bash
wget https://github.com/josephmarino/portfolio/archive/v1.0.0.tar.gz
```

I recommend fetching the release tar file rather than cloning this repo as the release tar file excludes all of the CI/CD workflow and linter config files that are not required to run this source code locally on your machine.

After the tar file has finished downloading, let's decompress it in verbose mode by typing the command:

```bash
tar -xzvf v1.0.0.tar.gz
```

After the tar file has finished decompressing, let's go into the source directory and run the source code. To do that type the commands:

```bash
cd portfolio-1.0.0/src/www
php -S localhost:8000
```
After typing the command, php -S localhost:8000, open up Chrome or your favorite web browser and visit http://127.0.0.1:8000 to see the portfolio website running. 
</p>
</details>

<details><summary>Install and run on your local machine (macOS)</summary>
<p>

The below installation instructions will help you get the source code up and running on a local machine in your development environment, such as a macbook pro. 

#### Prerequisites:

> None

#### OK; Let's install the source code from the macOS terminal/command line interface (CLI):

Let's fetch the latest release tar file from this repo: 

```bash
curl -L -O https://github.com/josephmarino/portfolio/archive/v1.0.0.tar.gz
```

I recommend fetching the release tar file rather than cloning this repo as the release tar file excludes all of the CI/CD workflow and linter config files that are not required to run this source code locally on your machine.

After the tar file has finished downloading, let's decompress it in verbose mode by typing the command:

```bash
tar -xzvf v1.0.0.tar.gz
```

After the tar file has finished decompressing, let's go into the source directory and run the source code. To do that type the commands:

```bash
cd portfolio-1.0.0/src/www
php -S localhost:8000
```
After typing the command, php -S localhost:8000, open up Chrome or your favorite web browser and visit http://127.0.0.1:8000 to see the portfolio website running. 
</p>
</details>

---
### Directory tree for this repo
```
├── .aws
│   └── ecs
│       └── docker
│           ├── nginx
│           │   └── conf.d
│           └── php-fpm
├── .github
│   └── workflows
src
├── error
├── img
├── include
├── libs
│   ├── bootstrap
│   │   └── v3.4.1
│   │       ├── css
│   │       └── js
│   ├── fonts
│   │   ├── noto_sans_hk
│   │   │   └── regular
│   │   └── open_sans
│   │       └── regular
│   ├── jpm
│   │   └── v1.0
│   │       └── css
│   ├── jquery
│   │   └── v3.4.1
│   ├── jquery-easing
│   │   └── v1.4.1
│   └── pdf.js
│       └── v2.3.200
│           ├── build
│           └── web
│               ├── cmaps
│               ├── images
│               └── locale
│                   ├── ach
│                   ├── af
│                   ├── ak
│                   ├── an
│                   ├── ar
│                   ├── ast
│                   ├── az
│                   ├── be
│                   ├── bg
│                   ├── bn-BD
│                   ├── bn-IN
│                   ├── br
│                   ├── brx
│                   ├── bs
│                   ├── ca
│                   ├── cak
│                   ├── cs
│                   ├── csb
│                   ├── cy
│                   ├── da
│                   ├── de
│                   ├── el
│                   ├── en-CA
│                   ├── en-GB
│                   ├── en-US
│                   ├── eo
│                   ├── es-AR
│                   ├── es-CL
│                   ├── es-ES
│                   ├── es-MX
│                   ├── et
│                   ├── eu
│                   ├── fa
│                   ├── ff
│                   ├── fi
│                   ├── fr
│                   ├── fy-NL
│                   ├── ga-IE
│                   ├── gd
│                   ├── gl
│                   ├── gn
│                   ├── gu-IN
│                   ├── he
│                   ├── hi-IN
│                   ├── hr
│                   ├── hsb
│                   ├── hto
│                   ├── hu
│                   ├── hy-AM
│                   ├── ia
│                   ├── id
│                   ├── is
│                   ├── it
│                   ├── ja
│                   ├── ka
│                   ├── kab
│                   ├── kk
│                   ├── km
│                   ├── kn
│                   ├── ko
│                   ├── kok
│                   ├── ks
│                   ├── ku
│                   ├── lg
│                   ├── lij
│                   ├── lo
│                   ├── lt
│                   ├── ltg
│                   ├── lv
│                   ├── meh
│                   ├── mk
│                   ├── mn
│                   ├── mr
│                   ├── ms
│                   ├── my
│                   ├── nb-NO
│                   ├── ne-NP
│                   ├── nl
│                   ├── nn-NO
│                   ├── nso
│                   ├── oc
│                   ├── pa-IN
│                   ├── pl
│                   ├── pt-BR
│                   ├── pt-PT
│                   ├── rm
│                   ├── ro
│                   ├── ru
│                   ├── rw
│                   ├── sah
│                   ├── sat
│                   ├── si
│                   ├── sk
│                   ├── sl
│                   ├── son
│                   ├── sq
│                   ├── sr
│                   ├── sv-SE
│                   ├── sw
│                   ├── ta
│                   ├── ta-LK
│                   ├── te
│                   ├── th
│                   ├── tl
│                   ├── tn
│                   ├── tr
│                   ├── tsz
│                   ├── uk
│                   ├── ur
│                   ├── uz
│                   ├── vi
│                   ├── wo
│                   ├── xh
│                   ├── zam
│                   ├── zh-CN
│                   ├── zh-TW
│                   └── zu
├── pdf
└── portfolio
    ├── 1
    ├── 2
    ├── 3
    └── 4
```
---

### Authors
[Joseph P. Marino](https://www.linkedin.com/in/josephpmarino/) <<joseph@marino.net>>

### License
Copyright (c) 2020 Joseph P. Marino. The source code and content for this portfolio is licensed under the [MIT License](https://github.com/josephmarino/portfolio/blob/master/LICENSE).

Libraries included in the /libs/ folder of this repo have their own open source licenses. The license for each library is located in the [LICENSE](https://github.com/josephmarino/portfolio/blob/master/LICENSE) file. The LICENSE file can be found in the root directory of this repo. Please review each library's license before deciding to use any library in your own project.

All rights are reserved for all content that appears on josephmarino.net including images, pdfs, and text. The content that appears on josephmarino.net, is not licensed and therefore is not included in this repo.