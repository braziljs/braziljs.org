<?php /* Template Name: Events */

  get_header(); ?>

  <section class="content">
    <div class="wrapper" id="events"></div>
  </section>

  <script type="text/x-handlebars-template" id="list-events">
  	{{#each events}}

		<div class="event">
	       <div class="event-media">
	         <a href="{{website}}" title="{{name}}">
	           <img src="{{thumbnail}}" alt="{{name}}"/>
	           <span class="event-date">{{date}}</span>
	           <span class="event-price">{{price}}</span>
	         </a>
	       </div>
	       <h1 class="event-name"><a href="{{website}}" title="{{name}}">{{name}}</a></h1>
	       <span class="event-city">{{location}}</span>
	    </div>

    {{/each}}
  </script>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/handlebars.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/events.js"></script>

  <?php get_footer(); ?>