# Faremos Palmares de Novo

## Overview

* A wordpress theme for Douglas Belchior campaign website Faremos Palmares de Novo.

<img src=".github/faremos.png" alt="Imagem do site">

## Running the Project

* `git clone` the repository somewhere that PHP, Apache, and MySQL can run (WordPress needs those).
* `yarn install` to install the necessary packages.

## Plugins
A list of all active plugins on the site.

| Name  | Function/Description | :warning: Warnings
| --- | --- | --- |
| Advanced Custom Fields | Provides most of the custom functionality on site. | Don't deactivate. |
| Contact Form 7 | Provides most of the custom functionality on site. | Don't deactivate. |
| Custom Post Type UI | Provides most of the custom functionality on site. | Don't deactivate. |
| Post My CF7 Form | Provides most of the custom functionality on site. | Don't deactivate. |
| Smart Slider 3 | Provides most of the custom functionality on site. | Don't deactivate. |

## Custom Templates
| Name | Filename | Function/Description | :warning: Warnings
| --- | --- | --- | --- |
| Eixos | `single-eixos.php` | Custom template. Loops through ACF Repeater location data that activates when this template is applied to a page. | :x: Don't re-use. | 

## Custom Post Types
A list of all actively used custom post types on the site.

| Label/Name  | $post_type | Description | Archive? | Single? |
| --- | --- | --- | --- | --- |
| Eixos  | `eixos` | Retrieves all eixos posts | No | Yes |
| Propostas Eixo 1 | `proposal_eixo1`  | Retrieves all proposals submitted in the Eixo 1 forms. | No | No | 
| Propostas Eixo 2 | `proposal_eixo2`  | Retrieves all proposals submitted in the Eixo 2 forms. | No | No | 
| Propostas Eixo 3 | `proposal_eixo3`  | Retrieves all proposals submitted in the Eixo 3 forms. | No | No | 