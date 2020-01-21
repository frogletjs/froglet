# Roadmap

## Goal
The project goal is to provide a project-init tool and scaffolding to integrate
technology. Froglet is the glue between component library software and apps,
providing a config based approach to managing and exporting your front-end code.
The goal of the monorepo approach here is to provide each feature as a standalone
`npm` package. The result of which is an integrated CLI for managing config and
series of Yeoman Generators to abstract and scaffold initial codebase.

Where possible, all configuration has an upgrade path whereas generated code
belongs solely to the project. In this way `froglet` projects have an **upgrade**
path in project configuration. Further CLI updates will `extract` all custom
code to easily reset a project as well as enable `publish`

## Stage 1 / MVP
* `@froglet/cli create`: Initializes froglet enabled project. This command is
responsible for:
  * Write `froglet.config.json`: Shared File Directory Info.
    * Initial Requirement: `DRUPAL_THEME_PATH` variable.
    * Initial Requirement: `COMPONENT_LIBRARY_PATH` variable.
  * Initialize `.yo-rc.json` at Project Root.
  * Initialize WebPack and Dependencies. 
    * Handle Default Config + Custom Config
  * Initialize ESLINT
  * Initialize git (optional)

* `@froglet/generate-froglet-drupal`: Yeoman Generator for Drupal Work. This is
responsible for:
  * Scaffold Drupal 8 Theme.
  * Resolve Root `.yo-rc.json`
  * Merge WebPack Configuration from `@froglet/cli create`
  * Next Steps:
    * Integrate `generate:module-utilities` to scaffold theme helper modules
    * Requirement: `froglet.config.json` holds `DRUPAL_MODULE_PATH` config. 

* `@froglet/generate-froglet-component-library`: Yeomon Generator for Component
 Library. Responsible for:
   * Scaffold Storybook Component Library
   * Resolve Root `.yo-rc.json`
   * Next Steps:
     * Integrate `generate:pattern-lab` to scaffold Pattern Lab CL.    

## Stage 2
* Upgrade Generators for Component Creators.
  * Create UI Components and Connectors.
* Upgrade `@froglet/cli create`: for Gatsby project.
* Upgrade `@froglet/generate-froglet-component-library` for Gatsby projects.

## Stage 3
* `@froglet/ds`: Implement Documentation and Publish feature to have a web-hosted
Design System.
* Optional. Integrate with Storybook / InVision DSM.

## Beyond
* Upgrade `@froglet/cli create`: for Wordpress project.
* Upgrade `@froglet/generate-froglet-component-library` for Wordpress projects.
* Upgrade `@froglet/ds` for Wordpress projects.
* Create `@froglet/generate-froglet-wordpress`.

## Future API Commands
* `@froglet/cli extract`: Extract Components.
* `@froglet/cli publish`: Publish Components.

## Ideas
* Contributed / Default Components
  * Discrete components exist in monorepo. Add via `@froglet add component-name`
