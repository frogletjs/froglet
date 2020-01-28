/**
 * Roadmap Pseudocode - Create
 * `@froglet/cli create`: Initializes config for froglet enabled project. This command is responsible for:
 * * Write `froglet.config.json`: Shared File Directory Info.
 * * * Initial Requirement: `DRUPAL_THEME_PATH` variable.
 * * * Initial Requirement: `COMPONENT_LIBRARY_PATH` variable.
 * * Initialize `.yo-rc.json` at Project Root.
 * * Initialize WebPack and Dependencies.
 * * * Handle Default Config + Custom Config
 * * Initialize ESLINT
 * * Initialize git (optional)
 *
 * Additional Template Files for Create
 * .browserslistrc
 * .editorconfig
 * .eslintignore
 * .huskyrc?
 * .nvmrc
 * .prettierignore
 * .stylelintignore
 * babel.config.js
 * jest.config.js
 * postcss.config.js
 *
 */

const create = function() {
  console.log('Create Froglet Project');
};

module.exports = create;
