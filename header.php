<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Plastic
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Chrome for Android theme color -->
	<meta name="theme-color" content="#303F9F">

	<!-- Web Application Manifest -->
	<link rel="manifest" href="manifest.json">

	<!-- Tile color for Win8 -->
	<meta name="msapplication-TileColor" content="#3372DF">

	<!-- build:css styles/main.css -->
	<link rel="stylesheet" href="<?php echo trailingslashit( get_stylesheet_directory_uri() ) . 'styles/main.css'; ?>">
	<!-- endbuild-->

	<!-- build:js bower_components/webcomponentsjs/webcomponents-lite.min.js -->
	<script src="<?php echo trailingslashit( get_stylesheet_directory_uri() ) . 'bower_components/webcomponentsjs/webcomponents-lite.js'; ?>"></script>
	<!-- endbuild -->

	<!-- will be replaced with elements/elements.vulcanized.html -->
	<link rel="import" href="<?php echo trailingslashit( get_stylesheet_directory_uri() ) . 'elements/elements.html'; ?>">
	<!-- endreplace-->


<?php wp_head(); ?>
</head>

<body unresolved <?php body_class(); ?>>
	<template is="dom-bind" id="app">
		<paper-drawer-panel id="paperDrawerPanel">
			<div drawer>
				<!-- Drawer Toolbar -->
				<paper-toolbar id="drawerToolbar">
					<span class="paper-font-title"><?php _e( 'Menu', 'plastic' ); ?></span>
				</paper-toolbar>

				<!-- Drawer Content -->
				<?php echo get_plastic_menu(); ?>
			</div>
			<paper-header-panel main mode="waterfall-tall">
				<!-- Main Toolbar -->
				<paper-toolbar id="mainToolbar">
					<paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>
					<span class="flex"></span>
					<!-- Toolbar icons -->
					<paper-icon-button icon="refresh"></paper-icon-button>
					<paper-icon-button icon="search"></paper-icon-button>

					<!-- Application name -->
					<div class="middle paper-font-display2 app-name"><?php bloginfo( 'name' ); ?></div>
					<!-- Application sub title -->
					<div class="bottom title"></div>
				</paper-toolbar>
