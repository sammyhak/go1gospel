@extends('common::framework')

@section('angular-styles')
    {{--angular styles begin--}}
		<link rel="stylesheet" href="client/styles.9bb809ff9cf5bf4b0c30.css">
	{{--angular styles end--}}
@endsection

@section('angular-scripts')
    {{--angular scripts begin--}}
		<script>setTimeout(function() {
        var spinner = document.querySelector('.global-spinner');
        if (spinner) spinner.style.display = 'flex';
    }, 100);</script>
		<script src="client/runtime-es2015.3976989978030e119515.js" type="module"></script>
		<script src="client/runtime-es5.3976989978030e119515.js" nomodule defer></script>
		<script src="client/polyfills-es5.17c10e62de51b5b9d337.js" nomodule defer></script>
		<script src="client/polyfills-es2015.84f0e61e42a8dc9f39a4.js" type="module"></script>
		<script src="client/main-es2015.05597763dcb7290e2f3f.js" type="module"></script>
		<script src="client/main-es5.05597763dcb7290e2f3f.js" nomodule defer></script>
	{{--angular scripts end--}}
@endsection
