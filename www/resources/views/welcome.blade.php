<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <base href="https://polygit.org/components/">
        <script src="webcomponentsjs/webcomponents-lite.js"></script>
        <link rel="import" href="app-layout/app-drawer-layout/app-drawer-layout.html">
        <link rel="import" href="app-layout/app-drawer/app-drawer.html">
        <link rel="import" href="app-layout/app-toolbar/app-toolbar.html">
        <link rel="import" href="app-layout/app-header-layout/app-header-layout.html">
        <link rel="import" href="app-layout/app-header/app-header.html">
        <link rel="import" href="app-layout/app-scroll-effects/app-scroll-effects.html">
        <link rel="import" href="app-layout/app-toolbar/app-toolbar.html">
        <link rel="import" href="paper-icon-button/paper-icon-button.html">
        <link rel="import" href="iron-icons/iron-icons.html">
        <link rel="import" href="app-layout/demo/sample-content.html">
        <style is="custom-style">
            body {
                margin: 0;
            }
            app-toolbar {
                background-color: #1E88E5;
                font-family: 'Roboto', Helvetica, sans-serif;
                color: white;
                --app-toolbar-font-size: 24px;
            }
        </style>
    </head>
    <body>
        <app-drawer-layout>
            <app-drawer>
                <app-toolbar>Getting Started!</app-toolbar>
            </app-drawer>
            <app-header-layout>
                <app-header reveals effects="waterfall">
                    <app-toolbar>
                        <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
                        <div main-title>Schwul</div>
                    </app-toolbar>
                </app-header>
                <sample-content size="10"></sample-content>
            </app-header-layout>
        </app-drawer-layout>
    </body>
</html>
