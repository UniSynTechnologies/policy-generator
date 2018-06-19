var app = angular.module('app', ['ngMaterial', 'ngMessages', 'ngAnimate']);
app.config(function($mdThemingProvider) {
  var primaryColorMap =
    $mdThemingProvider.extendPalette('cyan', {
    'contrastDefaultColor': 'light'
    });
  var accentColorMap =
    $mdThemingProvider.extendPalette('grey', {
    'contrastDefaultColor': 'light'
    });
  $mdThemingProvider.definePalette('primaryColor', primaryColorMap);
  $mdThemingProvider.definePalette('accentColor', accentColorMap);
  $mdThemingProvider.theme('default')
    .primaryPalette('primaryColor', {
      'default': '500',
      'hue-1': 'A200',
      'hue-2': '700',
    })
    .accentPalette('accentColor', {
      'default': '700',
      'hue-1': 'A200',
      'hue-2': '800'
    });
  $mdThemingProvider.theme('dark')
    .primaryPalette('primaryColor', {
      'default': '500',
      'hue-1': 'A200',
      'hue-2': '700'
    })
    .accentPalette('accentColor', {
      'default': '700',
      'hue-1': 'A200',
      'hue-2': '800'
    })
    .dark();
});