# Faqs plugin for CakePHP

## Prerequisites
Bootstrap 4

## Installation
Run:
```
composer require connect232/faqs
```
## Usage
Run :
```
bin/cake plugin load Faqs
```
Or in your `src/Application.php` add:
```
$this->addPlugin('Faqs');
```
Run migrations:
```
bin/cake migrations migrate -p Faqs
```
Add faq element to template file:
```
<?= $this->element('Faqs.faqs'); ?>
```
Include css:
```
<?= $this->Html->css('Faqs.styles'); ?>
```
or if using AssetCompress plugin in you asset_compress.ini file add:
```
paths[] = ../vendor/connect232/faqs/webroot/css/*
files[] = styles.css
```
Add to your routes file:
```
$routes->prefix('admin', function (RouteBuilder $routes) {
    $routes->loadPlugin('Faqs');
    $routes->fallbacks(DashedRoute::class);
});
```
Associate with category dataset table:
```
$this->hasMany('Faqs', [
    'className' => 'Faqs.Faqs',
    'foreignKey' => 'category_dataset_id',
]);
```
