# Change Log

All notable changes to this project will be documented in this file.
See [Conventional Commits](https://conventionalcommits.org) for commit guidelines.

## 1.0.6 (2020-04-27)


### chore

* add hook_suffix to enqueue_scripts_and_styles function (#4ujzx0)
* **release :** publish [ci skip]


### fix

* cronjob URL not working with plain permalink setting (#4pmk26, #4ar47j)





## 1.0.5 (2020-04-16)


### build

* move test namespaces to composer autoload-dev (#4jnk84)
* optional clean:webpackDevBundles grunt task to remove dev bundles in build artifact (#4jjq0u)
* scope PHP vendor dependencies (#4jnk84)


### chore

* create real-ad package to introduce more UX after installing the plugin (#1aewyf)
* rename real-ad to real-utils (#4jpg5f)


### ci

* correctly build i18n frontend files (#4jjq0u)
* run package jobs also on devops changes


### docs

* broken links in developer documentation (#5yg1cf)


### style

* reformat php codebase (#4gg05b)


### test

* fix typo in test files





## 1.0.4 (2020-03-31)


### chore

* update dependencies (#3cj43t)
* **release :** publish [ci skip]
* **release :** publish [ci skip]
* **release :** publish [ci skip]
* **release :** publish [ci skip]


### ci

* use concurrency 1 in yarn disclaimer generation


### test

* configure jest setupFiles correctly with enzyme and clearMocks (#4akeab)
* generate test reports (#4cg6tp)





## 1.0.3 (2020-03-05)


### build

* chunk vendor libraries (#3wkvfe) and update antd@4 (#3wnntb)


### chore

* update dependencies (webpack, types)
* **release :** publish [ci skip]





## 1.0.2 (2020-02-26)


### build

* migrate real-thumbnail-generator to monorepo


### fix

* usage of React while using Divi in dev environment (WP_DEBUG, #3rfqjk)
* use own wp_set_script_translations to make it compatible with deferred scripts (#3mjh0e)





## 1.0.1 (2020-02-13)


### fix

* do not load script translations for libraries (#3mjh0e)
