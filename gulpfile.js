var elixir = require('laravel-elixir');
require('elixir-typescript');
require('laravel-elixir-jade');

elixir(function(mix) {
    mix.sass('styles.scss')
        .typescript('scripts.ts')
        .jade({pretty:false});
});
