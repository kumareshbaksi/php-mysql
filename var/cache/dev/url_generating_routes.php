<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'user_home' => [[], ['_controller' => 'App\\Controller\\DataController::index'], [], [['text', '/home']], [], [], []],
    'removeOtps' => [[], ['_controller' => 'App\\Controller\\DataController::removeOtp'], [], [['text', '/removeOtps']], [], [], []],
    'save_form' => [[], ['_controller' => 'App\\Controller\\FormController::register'], [], [['text', '/register']], [], [], []],
    'login_form' => [[], ['_controller' => 'App\\Controller\\FormController::login'], [], [['text', '/login']], [], [], []],
    'confirmaccount' => [[], ['_controller' => 'App\\Controller\\FormController::confirmAccount'], [], [['text', '/confirmaccount']], [], [], []],
    'forget_password_form' => [[], ['_controller' => 'App\\Controller\\FormController::forgetPassword'], [], [['text', '/resetpassword']], [], [], []],
    'resetyourpassword' => [[], ['_controller' => 'App\\Controller\\FormController::resetyourpassword'], [], [['text', '/resetyourpassword']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\FormController::logout'], [], [['text', '/logout']], [], [], []],
    'save_form_data' => [[], ['_controller' => 'App\\Controller\\FormController::save'], [], [['text', '/save']], [], [], []],
    'download_pdf' => [[], ['_controller' => 'App\\Controller\\FormController::download'], [], [['text', '/download']], [], [], []],
    'resend_otp' => [[], ['_controller' => 'App\\Controller\\FormController::resedOtp'], [], [['text', '/resendotp']], [], [], []],
];
