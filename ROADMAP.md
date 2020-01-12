# Roadmap

The project goal is to provide a project-init tool and scaffolding to integrate
technology. Froglet is the glue between component library software and apps,
providing a config based approach to managing and exporting your front-end code. 

## Stage 1 / MVP

* `@froglet create-project`: Scaffold a Project with 
`npx @froglet create-project` from CLI.
    * Works in Drupal Project 
* `froglet-drupal-theme`: Scaffold `create-project` with a Drupal Theme.
* `froglet-storybook-drupal`: Scaffold `create-project` a 
Storybook Component Library for Drupal.

## Stage 2

* Upgrade `@froglet create-project`: for Gatsby project.
* `froglet-storybook-gatsby`: Scaffold `create-project` a 
Storybook Component Library for Gatsby.

## Stage 3

* Upgrade `@froglet create-project`: for Wordpress project.
* `froglet-storybook-wordpress`: Scaffold `create-project` a 
Storybook Component Library for Wordpress.

## Future API Commands

* `@froglet extract`: Extract Components.
* `@froglet publish`: Publish Components.

## Ideas

* Install contributed components.
    * Discrete components exist in monorepo. Add via `@froglet add component-name`
