# Boilerplate Yii2 Api
Boilerplate for create Yii 2 application

## Install

### 1. Global replace - first important step

Replace in every file of the project:

- For repository link: kozhindev/boilerplate-yii2-api
- For human-readable labels: Boilerplate Yii2 Api
- For urls/db/other ids: boilerplate-yii2-api (including this file)
- Rename the project in IDE
- Replace cookieValidationKey "7bQvXpI1iKZHdn68JbHUGoDu2qfNOTse" to another random string

### 2. Install dependencies

```sh
composer install
```

### 3. Configure database

- Create database "boilerplate-yii2-api"
- Copy config.sample.php to config.php and configure it
- Run application migrations
```sh
php yii migrate
```

### 4. Clean

- Replace 100% of its contents with your project's Readme
