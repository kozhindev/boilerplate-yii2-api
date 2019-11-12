<?php
return [
    'a::docs' => [
        'type' => 2,
        'description' => 'docs',
        'children' => [
            'a::docs::self',
            'a::docs::json',
        ],
    ],
    'a::docs::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::docs::json' => [
        'type' => 2,
        'description' => 'json',
    ],
    'a::file' => [
        'type' => 2,
        'description' => 'file',
        'children' => [
            'a::file::self',
            'a::file::upload',
            'a::file::upload-editor',
            'a::file::download',
            'a::file::crop',
        ],
    ],
    'a::file::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::file::upload' => [
        'type' => 2,
        'description' => 'upload',
    ],
    'a::file::upload-editor' => [
        'type' => 2,
        'description' => 'upload-editor',
    ],
    'a::file::download' => [
        'type' => 2,
        'description' => 'download',
    ],
    'a::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::self',
            'a::gii::gii',
        ],
    ],
    'a::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::gii::self',
            'a::gii::gii::gii-children',
        ],
    ],
    'a::gii::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii::gii-children' => [
        'type' => 2,
        'description' => 'gii-children',
    ],
    'a::api' => [
        'type' => 2,
        'description' => 'api',
        'children' => [
            'a::api::self',
            'a::api::api-gii',
            'a::api::auth',
            'a::api::init',
            'a::api::file',
            'a::api::user',
            'a::api::admin',
            'a::api::articles',
            'a::api::user-employe',
            'a::api::site',
        ],
    ],
    'a::api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii' => [
        'type' => 2,
        'description' => 'api-gii',
        'children' => [
            'a::api::api-gii::self',
            'a::api::api-gii::api-get-entities',
            'a::api::api-gii::api-class-save',
            'a::api::api-gii::api-get-permissions',
            'a::api::api-gii::api-permissions-save',
        ],
    ],
    'a::api::api-gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii::api-get-entities' => [
        'type' => 2,
        'description' => 'api-get-entities',
    ],
    'a::api::api-gii::api-class-save' => [
        'type' => 2,
        'description' => 'api-class-save',
    ],
    'a::api::api-gii::api-get-permissions' => [
        'type' => 2,
        'description' => 'api-get-permissions',
    ],
    'a::api::api-gii::api-permissions-save' => [
        'type' => 2,
        'description' => 'api-permissions-save',
    ],
    'a::steroids-api' => [
        'type' => 2,
        'description' => 'steroids-api',
        'children' => [
            'a::steroids-api::self',
            'a::steroids-api::fields-fetch',
            'a::steroids-api::meta-fetch',
        ],
    ],
    'a::steroids-api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::steroids-api::fields-fetch' => [
        'type' => 2,
        'description' => 'fields-fetch',
    ],
    'm::app\\user\\models\\User' => [
        'type' => 2,
        'description' => 'app\\user\\models\\User',
        'children' => [
            'm::app\\user\\models\\User::view',
            'm::app\\user\\models\\User::create',
            'm::app\\user\\models\\User::update',
            'm::app\\user\\models\\User::delete',
            'm::app\\user\\models\\User::id',
            'm::app\\user\\models\\User::email',
            'm::app\\user\\models\\User::role',
            'm::app\\user\\models\\User::passwordHash',
            'm::app\\user\\models\\User::language',
            'm::app\\user\\models\\User::createTime',
            'm::app\\user\\models\\User::updateTime',
            'm::app\\user\\models\\User::isBanned',
            'm::app\\user\\models\\User::isUnSubscribed',
            'm::app\\user\\models\\User::username',
        ],
    ],
    'm::app\\user\\models\\User::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\user\\models\\User::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\user\\models\\User::id::view',
        ],
    ],
    'm::app\\user\\models\\User::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\user\\models\\User::email::view',
            'm::app\\user\\models\\User::email::create',
            'm::app\\user\\models\\User::email::update',
        ],
    ],
    'm::app\\user\\models\\User::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::role' => [
        'type' => 2,
        'description' => 'role',
        'children' => [
            'm::app\\user\\models\\User::role::view',
            'm::app\\user\\models\\User::role::create',
            'm::app\\user\\models\\User::role::update',
        ],
    ],
    'm::app\\user\\models\\User::role::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::role::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::role::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::passwordHash' => [
        'type' => 2,
        'description' => 'passwordHash',
        'children' => [
            'm::app\\user\\models\\User::passwordHash::view',
            'm::app\\user\\models\\User::passwordHash::create',
            'm::app\\user\\models\\User::passwordHash::update',
        ],
    ],
    'm::app\\user\\models\\User::passwordHash::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::passwordHash::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::passwordHash::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::language' => [
        'type' => 2,
        'description' => 'language',
        'children' => [
            'm::app\\user\\models\\User::language::view',
            'm::app\\user\\models\\User::language::create',
            'm::app\\user\\models\\User::language::update',
        ],
    ],
    'm::app\\user\\models\\User::language::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::language::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::language::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\user\\models\\User::createTime::view',
        ],
    ],
    'm::app\\user\\models\\User::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\user\\models\\User::updateTime::view',
        ],
    ],
    'm::app\\user\\models\\User::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'guest' => [
        'type' => 1,
        'children' => [
            'a::api::init',
            'a::api::auth',
            'a::api::file',
            'a::api::admin::self',
            'a::api::articles',
            'm::app\\article\\models\\Article',
            'm::app\\article\\models\\ArticleTag',
            'a::api::user-employe',
            'a::api::site::about',
            'a::api::site::main',
            'a::api::site::subscribe',
        ],
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'a::api::self',
            'a::api::api-gii',
            'a::api::auth',
            'a::api::init',
            'a::file',
            'a::api::file',
            'a::api::admin::self',
            'a::api::articles',
            'm::app\\article\\models\\Article',
            'm::app\\article\\models\\ArticleTag',
            'a::api::user-employe',
            'a::api::site::about',
            'a::api::site::main',
            'a::api::site::subscribe',
        ],
    ],
    'moderator' => [
        'type' => 1,
        'children' => [
            'a::file',
            'a::api::self',
            'a::api::api-gii',
            'a::api::auth',
            'a::api::init',
            'a::api::file',
            'a::api::admin::self',
            'a::api::articles',
            'm::app\\article\\models\\ArticleTag',
            'm::app\\article\\models\\Article',
            'a::api::user-employe',
            'a::api::site::about',
            'a::api::site::main',
            'a::api::site::subscribe',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'a::api',
            'a::file',
            'm::app\\user\\models\\User',
            'm::app\\article\\models\\Article',
            'm::app\\article\\models\\ArticleTag',
            'm::app\\settings\\models\\Setting',
            'm::app\\user\\models\\UserEmploye',
            'm::app\\site\\models\\SubscribedEmail',
        ],
    ],
    'a::file::crop' => [
        'type' => 2,
        'description' => 'crop',
    ],
    'a::steroids-api::meta-fetch' => [
        'type' => 2,
        'description' => 'meta-fetch',
    ],
    'a::api::auth' => [
        'type' => 2,
        'description' => 'auth',
        'children' => [
            'a::api::auth::self',
            'a::api::auth::login',
            'a::api::auth::recovery',
            'a::api::auth::logout',
            'a::api::auth::recovery-confirm',
            'a::api::auth::registration-confirm',
            'a::api::auth::registration-1',
            'a::api::auth::registration-2',
        ],
    ],
    'a::api::auth::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::auth::login' => [
        'type' => 2,
        'description' => 'login',
    ],
    'a::api::auth::recovery' => [
        'type' => 2,
        'description' => 'recovery',
    ],
    'a::api::auth::logout' => [
        'type' => 2,
        'description' => 'logout',
    ],
    'a::api::auth::recovery-confirm' => [
        'type' => 2,
        'description' => 'recovery-confirm',
    ],
    'a::api::auth::registration-confirm' => [
        'type' => 2,
        'description' => 'registration-confirm',
    ],
    'a::api::init' => [
        'type' => 2,
        'description' => 'init',
    ],
    'm::app\\auth\\models\\AuthConfirm' => [
        'type' => 2,
        'description' => 'app\\auth\\models\\AuthConfirm',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::view',
            'm::app\\auth\\models\\AuthConfirm::create',
            'm::app\\auth\\models\\AuthConfirm::update',
            'm::app\\auth\\models\\AuthConfirm::delete',
            'm::app\\auth\\models\\AuthConfirm::id',
            'm::app\\auth\\models\\AuthConfirm::userId',
            'm::app\\auth\\models\\AuthConfirm::email',
            'm::app\\auth\\models\\AuthConfirm::code',
            'm::app\\auth\\models\\AuthConfirm::isConfirmed',
            'm::app\\auth\\models\\AuthConfirm::createTime',
            'm::app\\auth\\models\\AuthConfirm::updateTime',
            'm::app\\auth\\models\\AuthConfirm::expireTime',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthConfirm::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\auth\\models\\AuthConfirm::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::id::view',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::userId::view',
            'm::app\\auth\\models\\AuthConfirm::userId::create',
            'm::app\\auth\\models\\AuthConfirm::userId::update',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthConfirm::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::email::view',
            'm::app\\auth\\models\\AuthConfirm::email::create',
            'm::app\\auth\\models\\AuthConfirm::email::update',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthConfirm::code' => [
        'type' => 2,
        'description' => 'code',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::code::view',
            'm::app\\auth\\models\\AuthConfirm::code::create',
            'm::app\\auth\\models\\AuthConfirm::code::update',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::code::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::code::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::code::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthConfirm::isConfirmed' => [
        'type' => 2,
        'description' => 'isConfirmed',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::isConfirmed::view',
            'm::app\\auth\\models\\AuthConfirm::isConfirmed::create',
            'm::app\\auth\\models\\AuthConfirm::isConfirmed::update',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::isConfirmed::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::isConfirmed::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::isConfirmed::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthConfirm::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::createTime::view',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::updateTime::view',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::expireTime' => [
        'type' => 2,
        'description' => 'expireTime',
        'children' => [
            'm::app\\auth\\models\\AuthConfirm::expireTime::view',
            'm::app\\auth\\models\\AuthConfirm::expireTime::create',
            'm::app\\auth\\models\\AuthConfirm::expireTime::update',
        ],
    ],
    'm::app\\auth\\models\\AuthConfirm::expireTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthConfirm::expireTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthConfirm::expireTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin' => [
        'type' => 2,
        'description' => 'app\\auth\\models\\AuthLogin',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::view',
            'm::app\\auth\\models\\AuthLogin::create',
            'm::app\\auth\\models\\AuthLogin::update',
            'm::app\\auth\\models\\AuthLogin::delete',
            'm::app\\auth\\models\\AuthLogin::id',
            'm::app\\auth\\models\\AuthLogin::userId',
            'm::app\\auth\\models\\AuthLogin::authId',
            'm::app\\auth\\models\\AuthLogin::accessToken',
            'm::app\\auth\\models\\AuthLogin::ipAddress',
            'm::app\\auth\\models\\AuthLogin::location',
            'm::app\\auth\\models\\AuthLogin::userAgent',
            'm::app\\auth\\models\\AuthLogin::createTime',
            'm::app\\auth\\models\\AuthLogin::expireTime',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\auth\\models\\AuthLogin::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::id::view',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::userId::view',
            'm::app\\auth\\models\\AuthLogin::userId::create',
            'm::app\\auth\\models\\AuthLogin::userId::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::authId' => [
        'type' => 2,
        'description' => 'authId',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::authId::view',
            'm::app\\auth\\models\\AuthLogin::authId::create',
            'm::app\\auth\\models\\AuthLogin::authId::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::authId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::authId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::authId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::accessToken' => [
        'type' => 2,
        'description' => 'accessToken',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::accessToken::view',
            'm::app\\auth\\models\\AuthLogin::accessToken::create',
            'm::app\\auth\\models\\AuthLogin::accessToken::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::accessToken::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::accessToken::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::accessToken::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::ipAddress' => [
        'type' => 2,
        'description' => 'ipAddress',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::ipAddress::view',
            'm::app\\auth\\models\\AuthLogin::ipAddress::create',
            'm::app\\auth\\models\\AuthLogin::ipAddress::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::ipAddress::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::ipAddress::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::ipAddress::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::location' => [
        'type' => 2,
        'description' => 'location',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::location::view',
            'm::app\\auth\\models\\AuthLogin::location::create',
            'm::app\\auth\\models\\AuthLogin::location::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::location::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::location::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::location::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::userAgent' => [
        'type' => 2,
        'description' => 'userAgent',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::userAgent::view',
            'm::app\\auth\\models\\AuthLogin::userAgent::create',
            'm::app\\auth\\models\\AuthLogin::userAgent::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::userAgent::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::userAgent::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::userAgent::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\auth\\models\\AuthLogin::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::createTime::view',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::expireTime' => [
        'type' => 2,
        'description' => 'expireTime',
        'children' => [
            'm::app\\auth\\models\\AuthLogin::expireTime::view',
            'm::app\\auth\\models\\AuthLogin::expireTime::create',
            'm::app\\auth\\models\\AuthLogin::expireTime::update',
        ],
    ],
    'm::app\\auth\\models\\AuthLogin::expireTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\auth\\models\\AuthLogin::expireTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\auth\\models\\AuthLogin::expireTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::isBanned' => [
        'type' => 2,
        'description' => 'isBanned',
        'children' => [
            'm::app\\user\\models\\User::isBanned::view',
            'm::app\\user\\models\\User::isBanned::create',
            'm::app\\user\\models\\User::isBanned::update',
        ],
    ],
    'm::app\\user\\models\\User::isBanned::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::isBanned::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::isBanned::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::isUnSubscribed' => [
        'type' => 2,
        'description' => 'isUnSubscribed',
        'children' => [
            'm::app\\user\\models\\User::isUnSubscribed::view',
            'm::app\\user\\models\\User::isUnSubscribed::create',
            'm::app\\user\\models\\User::isUnSubscribed::update',
        ],
    ],
    'm::app\\user\\models\\User::isUnSubscribed::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::isUnSubscribed::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::isUnSubscribed::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::file' => [
        'type' => 2,
        'description' => 'file',
        'children' => [
            'a::api::file::self',
            'a::api::file::upload',
        ],
    ],
    'a::api::file::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::file::upload' => [
        'type' => 2,
        'description' => 'upload',
    ],
    'a::api::user' => [
        'type' => 2,
        'description' => 'user',
        'children' => [
            'a::api::user::self',
            'a::api::user::users',
            'a::api::user::get-user',
        ],
    ],
    'a::api::user::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::user::users' => [
        'type' => 2,
        'description' => 'users',
    ],
    'a::api::user::get-user' => [
        'type' => 2,
        'description' => 'get-user',
    ],
    'm::app\\user\\models\\User::username' => [
        'type' => 2,
        'description' => 'username',
        'children' => [
            'm::app\\user\\models\\User::username::view',
            'm::app\\user\\models\\User::username::create',
            'm::app\\user\\models\\User::username::update',
        ],
    ],
    'm::app\\user\\models\\User::username::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::username::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::username::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::auth::registration-1' => [
        'type' => 2,
        'description' => 'registration-1',
    ],
    'a::api::auth::registration-2' => [
        'type' => 2,
        'description' => 'registration-2',
    ],
    'a::api::admin' => [
        'type' => 2,
        'description' => 'admin',
        'children' => [
            'a::api::admin::self',
            'a::api::admin::articles',
            'a::api::admin::user-employees',
            'a::api::admin::subscribed',
            'a::api::admin::settings',
        ],
    ],
    'a::api::admin::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::articles' => [
        'type' => 2,
        'description' => 'articles',
        'children' => [
            'a::api::admin::articles::self',
            'a::api::admin::articles::index',
            'a::api::admin::articles::create',
            'a::api::admin::articles::update-batch',
            'a::api::admin::articles::update',
            'a::api::admin::articles::view',
            'a::api::admin::articles::delete',
            'a::api::admin::articles::page',
            'a::api::admin::articles::tags',
        ],
    ],
    'a::api::admin::articles::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::articles::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::articles::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::articles::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::articles::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::articles::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::articles::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\article\\models\\Article' => [
        'type' => 2,
        'description' => 'app\\article\\models\\Article',
        'children' => [
            'm::app\\article\\models\\Article::view',
            'm::app\\article\\models\\Article::create',
            'm::app\\article\\models\\Article::update',
            'm::app\\article\\models\\Article::delete',
            'm::app\\article\\models\\Article::id',
            'm::app\\article\\models\\Article::category',
            'm::app\\article\\models\\Article::name',
            'm::app\\article\\models\\Article::title',
            'm::app\\article\\models\\Article::description',
            'm::app\\article\\models\\Article::textRu',
            'm::app\\article\\models\\Article::textEn',
            'm::app\\article\\models\\Article::imageId',
            'm::app\\article\\models\\Article::pdfFileId',
            'm::app\\article\\models\\Article::sourceTitle',
            'm::app\\article\\models\\Article::sourceUrl',
            'm::app\\article\\models\\Article::metaKeywords',
            'm::app\\article\\models\\Article::metaDescription',
            'm::app\\article\\models\\Article::viewsCount',
            'm::app\\article\\models\\Article::isPublished',
            'm::app\\article\\models\\Article::isPrivateContent',
            'm::app\\article\\models\\Article::isShowInBanner',
            'm::app\\article\\models\\Article::createTime',
            'm::app\\article\\models\\Article::updateTime',
            'm::app\\article\\models\\Article::tagsIds',
            'm::app\\article\\models\\Article::imagesIds',
            'm::app\\article\\models\\Article::filesIds',
            'm::app\\article\\models\\Article::publishTime',
            'm::app\\article\\models\\Article::projectType',
        ],
    ],
    'm::app\\article\\models\\Article::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\article\\models\\Article::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\article\\models\\Article::id::view',
        ],
    ],
    'm::app\\article\\models\\Article::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::category' => [
        'type' => 2,
        'description' => 'category',
        'children' => [
            'm::app\\article\\models\\Article::category::view',
            'm::app\\article\\models\\Article::category::create',
            'm::app\\article\\models\\Article::category::update',
        ],
    ],
    'm::app\\article\\models\\Article::category::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::category::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::category::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::app\\article\\models\\Article::name::view',
            'm::app\\article\\models\\Article::name::create',
            'm::app\\article\\models\\Article::name::update',
        ],
    ],
    'm::app\\article\\models\\Article::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::title' => [
        'type' => 2,
        'description' => 'title',
        'children' => [
            'm::app\\article\\models\\Article::title::view',
            'm::app\\article\\models\\Article::title::create',
            'm::app\\article\\models\\Article::title::update',
        ],
    ],
    'm::app\\article\\models\\Article::title::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::title::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::title::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::description' => [
        'type' => 2,
        'description' => 'description',
        'children' => [
            'm::app\\article\\models\\Article::description::view',
            'm::app\\article\\models\\Article::description::create',
            'm::app\\article\\models\\Article::description::update',
        ],
    ],
    'm::app\\article\\models\\Article::description::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::description::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::description::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::textRu' => [
        'type' => 2,
        'description' => 'textRu',
        'children' => [
            'm::app\\article\\models\\Article::textRu::view',
            'm::app\\article\\models\\Article::textRu::create',
            'm::app\\article\\models\\Article::textRu::update',
        ],
    ],
    'm::app\\article\\models\\Article::textRu::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::textRu::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::textRu::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::textEn' => [
        'type' => 2,
        'description' => 'textEn',
        'children' => [
            'm::app\\article\\models\\Article::textEn::view',
            'm::app\\article\\models\\Article::textEn::create',
            'm::app\\article\\models\\Article::textEn::update',
        ],
    ],
    'm::app\\article\\models\\Article::textEn::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::textEn::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::textEn::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::imageId' => [
        'type' => 2,
        'description' => 'imageId',
        'children' => [
            'm::app\\article\\models\\Article::imageId::view',
            'm::app\\article\\models\\Article::imageId::create',
            'm::app\\article\\models\\Article::imageId::update',
        ],
    ],
    'm::app\\article\\models\\Article::imageId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::imageId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::imageId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::pdfFileId' => [
        'type' => 2,
        'description' => 'pdfFileId',
        'children' => [
            'm::app\\article\\models\\Article::pdfFileId::view',
            'm::app\\article\\models\\Article::pdfFileId::create',
            'm::app\\article\\models\\Article::pdfFileId::update',
        ],
    ],
    'm::app\\article\\models\\Article::pdfFileId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::pdfFileId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::pdfFileId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::sourceTitle' => [
        'type' => 2,
        'description' => 'sourceTitle',
        'children' => [
            'm::app\\article\\models\\Article::sourceTitle::view',
            'm::app\\article\\models\\Article::sourceTitle::create',
            'm::app\\article\\models\\Article::sourceTitle::update',
        ],
    ],
    'm::app\\article\\models\\Article::sourceTitle::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::sourceTitle::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::sourceTitle::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::sourceUrl' => [
        'type' => 2,
        'description' => 'sourceUrl',
        'children' => [
            'm::app\\article\\models\\Article::sourceUrl::view',
            'm::app\\article\\models\\Article::sourceUrl::create',
            'm::app\\article\\models\\Article::sourceUrl::update',
        ],
    ],
    'm::app\\article\\models\\Article::sourceUrl::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::sourceUrl::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::sourceUrl::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::metaKeywords' => [
        'type' => 2,
        'description' => 'metaKeywords',
        'children' => [
            'm::app\\article\\models\\Article::metaKeywords::view',
            'm::app\\article\\models\\Article::metaKeywords::create',
            'm::app\\article\\models\\Article::metaKeywords::update',
        ],
    ],
    'm::app\\article\\models\\Article::metaKeywords::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::metaKeywords::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::metaKeywords::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::metaDescription' => [
        'type' => 2,
        'description' => 'metaDescription',
        'children' => [
            'm::app\\article\\models\\Article::metaDescription::view',
            'm::app\\article\\models\\Article::metaDescription::create',
            'm::app\\article\\models\\Article::metaDescription::update',
        ],
    ],
    'm::app\\article\\models\\Article::metaDescription::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::metaDescription::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::metaDescription::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::viewsCount' => [
        'type' => 2,
        'description' => 'viewsCount',
        'children' => [
            'm::app\\article\\models\\Article::viewsCount::view',
            'm::app\\article\\models\\Article::viewsCount::create',
            'm::app\\article\\models\\Article::viewsCount::update',
        ],
    ],
    'm::app\\article\\models\\Article::viewsCount::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::viewsCount::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::viewsCount::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::isPublished' => [
        'type' => 2,
        'description' => 'isPublished',
        'children' => [
            'm::app\\article\\models\\Article::isPublished::view',
            'm::app\\article\\models\\Article::isPublished::create',
            'm::app\\article\\models\\Article::isPublished::update',
        ],
    ],
    'm::app\\article\\models\\Article::isPublished::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::isPublished::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::isPublished::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::isPrivateContent' => [
        'type' => 2,
        'description' => 'isPrivateContent',
        'children' => [
            'm::app\\article\\models\\Article::isPrivateContent::view',
            'm::app\\article\\models\\Article::isPrivateContent::create',
            'm::app\\article\\models\\Article::isPrivateContent::update',
        ],
    ],
    'm::app\\article\\models\\Article::isPrivateContent::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::isPrivateContent::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::isPrivateContent::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::isShowInBanner' => [
        'type' => 2,
        'description' => 'isShowInBanner',
        'children' => [
            'm::app\\article\\models\\Article::isShowInBanner::view',
            'm::app\\article\\models\\Article::isShowInBanner::create',
            'm::app\\article\\models\\Article::isShowInBanner::update',
        ],
    ],
    'm::app\\article\\models\\Article::isShowInBanner::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::isShowInBanner::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::isShowInBanner::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\article\\models\\Article::createTime::view',
        ],
    ],
    'm::app\\article\\models\\Article::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\article\\models\\Article::updateTime::view',
        ],
    ],
    'm::app\\article\\models\\Article::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::tagsIds' => [
        'type' => 2,
        'description' => 'tagsIds',
        'children' => [
            'm::app\\article\\models\\Article::tagsIds::view',
            'm::app\\article\\models\\Article::tagsIds::create',
            'm::app\\article\\models\\Article::tagsIds::update',
        ],
    ],
    'm::app\\article\\models\\Article::tagsIds::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::tagsIds::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::tagsIds::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::imagesIds' => [
        'type' => 2,
        'description' => 'imagesIds',
        'children' => [
            'm::app\\article\\models\\Article::imagesIds::view',
            'm::app\\article\\models\\Article::imagesIds::create',
            'm::app\\article\\models\\Article::imagesIds::update',
        ],
    ],
    'm::app\\article\\models\\Article::imagesIds::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::imagesIds::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::imagesIds::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\Article::filesIds' => [
        'type' => 2,
        'description' => 'filesIds',
        'children' => [
            'm::app\\article\\models\\Article::filesIds::view',
            'm::app\\article\\models\\Article::filesIds::create',
            'm::app\\article\\models\\Article::filesIds::update',
        ],
    ],
    'm::app\\article\\models\\Article::filesIds::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::filesIds::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::filesIds::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\ArticleTag' => [
        'type' => 2,
        'description' => 'app\\article\\models\\ArticleTag',
        'children' => [
            'm::app\\article\\models\\ArticleTag::view',
            'm::app\\article\\models\\ArticleTag::create',
            'm::app\\article\\models\\ArticleTag::update',
            'm::app\\article\\models\\ArticleTag::delete',
            'm::app\\article\\models\\ArticleTag::id',
            'm::app\\article\\models\\ArticleTag::category',
            'm::app\\article\\models\\ArticleTag::name',
            'm::app\\article\\models\\ArticleTag::title',
            'm::app\\article\\models\\ArticleTag::isPublished',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\ArticleTag::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\ArticleTag::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\article\\models\\ArticleTag::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\article\\models\\ArticleTag::id::view',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::category' => [
        'type' => 2,
        'description' => 'category',
        'children' => [
            'm::app\\article\\models\\ArticleTag::category::view',
            'm::app\\article\\models\\ArticleTag::category::create',
            'm::app\\article\\models\\ArticleTag::category::update',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::category::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::category::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\ArticleTag::category::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\ArticleTag::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::app\\article\\models\\ArticleTag::name::view',
            'm::app\\article\\models\\ArticleTag::name::create',
            'm::app\\article\\models\\ArticleTag::name::update',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\ArticleTag::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\ArticleTag::title' => [
        'type' => 2,
        'description' => 'title',
        'children' => [
            'm::app\\article\\models\\ArticleTag::title::view',
            'm::app\\article\\models\\ArticleTag::title::create',
            'm::app\\article\\models\\ArticleTag::title::update',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::title::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::title::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\ArticleTag::title::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\article\\models\\ArticleTag::isPublished' => [
        'type' => 2,
        'description' => 'isPublished',
        'children' => [
            'm::app\\article\\models\\ArticleTag::isPublished::view',
            'm::app\\article\\models\\ArticleTag::isPublished::create',
            'm::app\\article\\models\\ArticleTag::isPublished::update',
        ],
    ],
    'm::app\\article\\models\\ArticleTag::isPublished::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\ArticleTag::isPublished::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\ArticleTag::isPublished::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting' => [
        'type' => 2,
        'description' => 'app\\settings\\models\\Setting',
        'children' => [
            'm::app\\settings\\models\\Setting::view',
            'm::app\\settings\\models\\Setting::create',
            'm::app\\settings\\models\\Setting::update',
            'm::app\\settings\\models\\Setting::delete',
            'm::app\\settings\\models\\Setting::id',
            'm::app\\settings\\models\\Setting::category',
            'm::app\\settings\\models\\Setting::name',
            'm::app\\settings\\models\\Setting::value',
            'm::app\\settings\\models\\Setting::title',
            'm::app\\settings\\models\\Setting::createTime',
            'm::app\\settings\\models\\Setting::updateTime',
        ],
    ],
    'm::app\\settings\\models\\Setting::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\settings\\models\\Setting::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\settings\\models\\Setting::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\settings\\models\\Setting::id::view',
        ],
    ],
    'm::app\\settings\\models\\Setting::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::category' => [
        'type' => 2,
        'description' => 'category',
        'children' => [
            'm::app\\settings\\models\\Setting::category::view',
            'm::app\\settings\\models\\Setting::category::create',
            'm::app\\settings\\models\\Setting::category::update',
        ],
    ],
    'm::app\\settings\\models\\Setting::category::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::category::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\settings\\models\\Setting::category::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::app\\settings\\models\\Setting::name::view',
            'm::app\\settings\\models\\Setting::name::create',
            'm::app\\settings\\models\\Setting::name::update',
        ],
    ],
    'm::app\\settings\\models\\Setting::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\settings\\models\\Setting::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting::value' => [
        'type' => 2,
        'description' => 'value',
        'children' => [
            'm::app\\settings\\models\\Setting::value::view',
            'm::app\\settings\\models\\Setting::value::create',
            'm::app\\settings\\models\\Setting::value::update',
        ],
    ],
    'm::app\\settings\\models\\Setting::value::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::value::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\settings\\models\\Setting::value::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting::title' => [
        'type' => 2,
        'description' => 'title',
        'children' => [
            'm::app\\settings\\models\\Setting::title::view',
            'm::app\\settings\\models\\Setting::title::create',
            'm::app\\settings\\models\\Setting::title::update',
        ],
    ],
    'm::app\\settings\\models\\Setting::title::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::title::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\settings\\models\\Setting::title::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\settings\\models\\Setting::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\settings\\models\\Setting::createTime::view',
        ],
    ],
    'm::app\\settings\\models\\Setting::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\settings\\models\\Setting::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\settings\\models\\Setting::updateTime::view',
        ],
    ],
    'm::app\\settings\\models\\Setting::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye' => [
        'type' => 2,
        'description' => 'app\\user\\models\\UserEmploye',
        'children' => [
            'm::app\\user\\models\\UserEmploye::view',
            'm::app\\user\\models\\UserEmploye::create',
            'm::app\\user\\models\\UserEmploye::update',
            'm::app\\user\\models\\UserEmploye::delete',
            'm::app\\user\\models\\UserEmploye::id',
            'm::app\\user\\models\\UserEmploye::name',
            'm::app\\user\\models\\UserEmploye::email',
            'm::app\\user\\models\\UserEmploye::phone',
            'm::app\\user\\models\\UserEmploye::imageId',
            'm::app\\user\\models\\UserEmploye::workPosition',
            'm::app\\user\\models\\UserEmploye::text',
            'm::app\\user\\models\\UserEmploye::isPublished',
            'm::app\\user\\models\\UserEmploye::createTime',
            'm::app\\user\\models\\UserEmploye::updateTime',
            'm::app\\user\\models\\UserEmploye::videoUrl',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\user\\models\\UserEmploye::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\user\\models\\UserEmploye::id::view',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::app\\user\\models\\UserEmploye::name::view',
            'm::app\\user\\models\\UserEmploye::name::create',
            'm::app\\user\\models\\UserEmploye::name::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\user\\models\\UserEmploye::email::view',
            'm::app\\user\\models\\UserEmploye::email::create',
            'm::app\\user\\models\\UserEmploye::email::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::phone' => [
        'type' => 2,
        'description' => 'phone',
        'children' => [
            'm::app\\user\\models\\UserEmploye::phone::view',
            'm::app\\user\\models\\UserEmploye::phone::create',
            'm::app\\user\\models\\UserEmploye::phone::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::phone::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::phone::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::phone::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::imageId' => [
        'type' => 2,
        'description' => 'imageId',
        'children' => [
            'm::app\\user\\models\\UserEmploye::imageId::view',
            'm::app\\user\\models\\UserEmploye::imageId::create',
            'm::app\\user\\models\\UserEmploye::imageId::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::imageId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::imageId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::imageId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::workPosition' => [
        'type' => 2,
        'description' => 'workPosition',
        'children' => [
            'm::app\\user\\models\\UserEmploye::workPosition::view',
            'm::app\\user\\models\\UserEmploye::workPosition::create',
            'm::app\\user\\models\\UserEmploye::workPosition::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::workPosition::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::workPosition::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::workPosition::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::text' => [
        'type' => 2,
        'description' => 'text',
        'children' => [
            'm::app\\user\\models\\UserEmploye::text::view',
            'm::app\\user\\models\\UserEmploye::text::create',
            'm::app\\user\\models\\UserEmploye::text::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::text::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::text::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::text::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::isPublished' => [
        'type' => 2,
        'description' => 'isPublished',
        'children' => [
            'm::app\\user\\models\\UserEmploye::isPublished::view',
            'm::app\\user\\models\\UserEmploye::isPublished::create',
            'm::app\\user\\models\\UserEmploye::isPublished::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::isPublished::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::isPublished::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::isPublished::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\user\\models\\UserEmploye::createTime::view',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\user\\models\\UserEmploye::updateTime::view',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::user-employees' => [
        'type' => 2,
        'description' => 'user-employees',
        'children' => [
            'a::api::admin::user-employees::self',
            'a::api::admin::user-employees::index',
            'a::api::admin::user-employees::create',
            'a::api::admin::user-employees::update-batch',
            'a::api::admin::user-employees::update',
            'a::api::admin::user-employees::view',
            'a::api::admin::user-employees::delete',
        ],
    ],
    'a::api::admin::user-employees::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::user-employees::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::user-employees::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::user-employees::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::user-employees::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::user-employees::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::user-employees::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'a::api::articles' => [
        'type' => 2,
        'description' => 'articles',
        'children' => [
            'a::api::articles::self',
            'a::api::articles::articles-list',
            'a::api::articles::article',
            'a::api::articles::single-page',
            'a::api::articles::search',
        ],
    ],
    'a::api::articles::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'm::app\\article\\models\\Article::publishTime' => [
        'type' => 2,
        'description' => 'publishTime',
        'children' => [
            'm::app\\article\\models\\Article::publishTime::view',
            'm::app\\article\\models\\Article::publishTime::create',
            'm::app\\article\\models\\Article::publishTime::update',
        ],
    ],
    'm::app\\article\\models\\Article::publishTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::publishTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::publishTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::articles::articles-list' => [
        'type' => 2,
        'description' => 'articles-list',
    ],
    'a::api::articles::article' => [
        'type' => 2,
        'description' => 'article',
    ],
    'a::api::user-employe' => [
        'type' => 2,
        'description' => 'user-employe',
        'children' => [
            'a::api::user-employe::self',
            'a::api::user-employe::user-employe-list',
            'a::api::user-employe::user-employe',
        ],
    ],
    'a::api::user-employe::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::user-employe::user-employe-list' => [
        'type' => 2,
        'description' => 'user-employe-list',
    ],
    'a::api::user-employe::user-employe' => [
        'type' => 2,
        'description' => 'user-employe',
    ],
    'm::app\\article\\models\\Article::projectType' => [
        'type' => 2,
        'description' => 'projectType',
        'children' => [
            'm::app\\article\\models\\Article::projectType::view',
            'm::app\\article\\models\\Article::projectType::create',
            'm::app\\article\\models\\Article::projectType::update',
        ],
    ],
    'm::app\\article\\models\\Article::projectType::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\article\\models\\Article::projectType::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\article\\models\\Article::projectType::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\UserEmploye::videoUrl' => [
        'type' => 2,
        'description' => 'videoUrl',
        'children' => [
            'm::app\\user\\models\\UserEmploye::videoUrl::view',
            'm::app\\user\\models\\UserEmploye::videoUrl::create',
            'm::app\\user\\models\\UserEmploye::videoUrl::update',
        ],
    ],
    'm::app\\user\\models\\UserEmploye::videoUrl::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\UserEmploye::videoUrl::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\UserEmploye::videoUrl::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::site' => [
        'type' => 2,
        'description' => 'site',
        'children' => [
            'a::api::site::self',
            'a::api::site::main',
            'a::api::site::about',
            'a::api::site::subscribe',
        ],
    ],
    'a::api::site::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::site::main' => [
        'type' => 2,
        'description' => 'main',
    ],
    'a::api::site::about' => [
        'type' => 2,
        'description' => 'about',
    ],
    'a::api::site::subscribe' => [
        'type' => 2,
        'description' => 'subscribe',
    ],
    'm::app\\site\\models\\SubscribedEmail' => [
        'type' => 2,
        'description' => 'app\\site\\models\\SubscribedEmail',
        'children' => [
            'm::app\\site\\models\\SubscribedEmail::view',
            'm::app\\site\\models\\SubscribedEmail::create',
            'm::app\\site\\models\\SubscribedEmail::update',
            'm::app\\site\\models\\SubscribedEmail::delete',
            'm::app\\site\\models\\SubscribedEmail::id',
            'm::app\\site\\models\\SubscribedEmail::email',
        ],
    ],
    'm::app\\site\\models\\SubscribedEmail::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\site\\models\\SubscribedEmail::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\site\\models\\SubscribedEmail::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\site\\models\\SubscribedEmail::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\site\\models\\SubscribedEmail::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\site\\models\\SubscribedEmail::id::view',
        ],
    ],
    'm::app\\site\\models\\SubscribedEmail::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\site\\models\\SubscribedEmail::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\site\\models\\SubscribedEmail::email::view',
            'm::app\\site\\models\\SubscribedEmail::email::create',
            'm::app\\site\\models\\SubscribedEmail::email::update',
        ],
    ],
    'm::app\\site\\models\\SubscribedEmail::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\site\\models\\SubscribedEmail::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\site\\models\\SubscribedEmail::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::subscribed' => [
        'type' => 2,
        'description' => 'subscribed',
        'children' => [
            'a::api::admin::subscribed::self',
            'a::api::admin::subscribed::index',
            'a::api::admin::subscribed::create',
            'a::api::admin::subscribed::update-batch',
            'a::api::admin::subscribed::update',
            'a::api::admin::subscribed::view',
            'a::api::admin::subscribed::delete',
        ],
    ],
    'a::api::admin::subscribed::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::subscribed::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::subscribed::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::subscribed::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::subscribed::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::subscribed::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::subscribed::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'a::api::articles::single-page' => [
        'type' => 2,
        'description' => 'single-page',
    ],
    'a::api::admin::articles::page' => [
        'type' => 2,
        'description' => 'page',
        'children' => [
            'a::api::admin::articles::page::self',
            'a::api::admin::articles::page::index',
            'a::api::admin::articles::page::create',
            'a::api::admin::articles::page::update-batch',
            'a::api::admin::articles::page::update',
            'a::api::admin::articles::page::view',
            'a::api::admin::articles::page::delete',
        ],
    ],
    'a::api::admin::articles::page::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::articles::page::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::articles::page::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::articles::page::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::articles::page::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::articles::page::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::articles::page::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'a::api::admin::settings' => [
        'type' => 2,
        'description' => 'settings',
        'children' => [
            'a::api::admin::settings::self',
            'a::api::admin::settings::index',
            'a::api::admin::settings::create',
            'a::api::admin::settings::update-batch',
            'a::api::admin::settings::update',
            'a::api::admin::settings::view',
            'a::api::admin::settings::delete',
        ],
    ],
    'a::api::admin::settings::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::settings::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::settings::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::settings::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::settings::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::settings::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::settings::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'a::api::admin::articles::tags' => [
        'type' => 2,
        'description' => 'tags',
        'children' => [
            'a::api::admin::articles::tags::self',
            'a::api::admin::articles::tags::index',
            'a::api::admin::articles::tags::create',
            'a::api::admin::articles::tags::update-batch',
            'a::api::admin::articles::tags::update',
            'a::api::admin::articles::tags::view',
            'a::api::admin::articles::tags::delete',
        ],
    ],
    'a::api::admin::articles::tags::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::articles::tags::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::admin::articles::tags::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'a::api::admin::articles::tags::update-batch' => [
        'type' => 2,
        'description' => 'update-batch',
    ],
    'a::api::admin::articles::tags::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin::articles::tags::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'a::api::admin::articles::tags::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'a::api::articles::search' => [
        'type' => 2,
        'description' => 'search',
    ],
];
