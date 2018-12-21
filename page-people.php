<?php
/*
Template Name: People Page
*/
?>

<?php get_header(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.2/handlebars.min.js"></script>    
<script type='text/javascript'>
$(document).ready(function(){

	var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/10cEV42qoeJMTqKOoCw69G0dSrATNOjN5Sbn6ncUadqg/edit#gid=0';

	// Compile the Handlebars template for HR leaders.
	var PeopleTemplate = Handlebars.compile($('#people-template').html());
b 
	$('#main').sheetrock({
	  url: mySpreadsheet,
	  rowTemplate: PeopleTemplate,
	});
});

</script>

			<div id="content" class="peoplePage">
				<header class="article-header">

					<h1 class="text-center alt-font" itemprop="headline">The people of <span class="light-orange">h</span><span class="pink">u</span><span class="light-blue">e</span><span class="teal">s</span></h1>

					<div class="button-group filters-button-group clearfix">
						<button class="button is-checked" data-filter="*">show all</button>
						<button class="button" data-filter=".Founder">founders</button>
						<button class="button" data-filter=".Advisor">advisors</button>
						<!--<button class="button" data-filter=".Steward">stewards</button>-->
					</div>

				</header> <!-- end article header -->

				<div id="inner-content" class="clearfix">
			
						<div id="main" class="clearfix isotope" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="statement" <?php post_class('loopCard clearfix projectVert'); ?> role="article">
								<div class="loopText entry-content clearfix">
									<?php echo the_content()?>
								</div>

							</article> <!-- end blog entry -->

							<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->
													
						  	<script id="people-template" type="text/x-handlebars-template">

					   		<article id="{{cells.ID}}" class="loopCard clearfix projectVert {{cells.Role}}" role="article" data-category="{{cells.Role}}" itemtype="https://schema.org/Person">
								<div class="loopImage featuredImage">

									{{#if cells.URL}}
										{{#if cells.Headshot}}
											<a itemprop="url" href="{{cells.URL}}" alt="{{cells.Name}}"><img src="{{cells.Headshot}}" alt="{{cells.Name}} Portrait" /></a>
										{{/if}}
									{{else}}
										{{#if cells.Headshot}}
											<img src="{{cells.Headshot}}" alt="{{cells.Name}} Portrait" />
										{{/if}}
									{{/if}}
									
								</div><!--/loopImage-->

								<div class="loopText clearfix">
									{{#if cells.Icon}}
										<h3 class="peopleIcon"><i class="fa fa-{{cells.Icon}} fa-3x"></i></h3>
									{{/if}}
									<h2>
										{{#if cells.URL}}
											{{#if cells.Pronouns}}
												<a itemprop="url" class="tip" data-tip="{{cells.Pronouns}}" href="{{cells.URL}}" alt="{{cells.Name}}">{{cells.Name}}</a>
											{{else}}
											<a href="{{cells.URL}}" alt="{{cells.Name}}">{{cells.Name}}</a>
											{{/if}}
										{{else}}
											{{#if cells.Pronouns}}
												<span class="tip" data-tip="{{cells.Pronouns}}">{{cells.Name}}</span>
											{{else}}
												{{cells.Name}}
											{{/if}}
										{{/if}}
									</h2>
									<h3>{{cells.Title}}</h3>
									<p>{{cells.Blurb}}</p>
									<ul class="bioLinks">
										{{#if cells.Email}}
											<li><a class="tip" data-tip="{{cells.Email}}" href="mailto:{{cells.Email}}" alt="Email {{cells.Name}}"><i class="fa fa-envelope-o"></i></a></li>
										{{/if}}
										{{#if cells.Instagram}}
											<li>
												<a class="tip" data-tip="Instagram" href="https://instagram.com/{{cells.Instagram}}" alt="{{cells.Name}}'s Instagram">
													<i class="fa fa-instagram"></i>
												</a>
											</li>
										{{/if}}
										{{#if cells.Facebook}}
											<li>
												<a class="tip" data-tip="Facebook" href="https://facebook.com/{{cells.Facebook}}" alt="{{cells.Name}}'s Facebook">
													<i class="fa fa-facebook-square"></i>
												</a>
											</li>
										{{/if}}

										{{#if cells.Twitter}}
											<li>
												<a class="tip" data-tip="Twitter" href="https://twitter.com/{{cells.Twitter}}" alt="{{cells.Name}}'s Twitter">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
										{{/if}}

										{{#if cells.YouTube}}
											<li>
												<a class="tip" data-tip="YouTube" href="{{cells.YouTube}}" alt="{{cells.Name}}'s YouTube">
													<i class="fa fa-youtube"></i>
												</a>
											</li>
										{{/if}}
										{{#if cells.LinkedIn}}
											<li>
												<a class="tip" data-tip="LinkedIn" href="https://linkedin.com/in/{{cells.LinkedIn}}" alt="{{cells.Name}}'s LinkedIn">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										{{/if}}

									</ul>
									{{#if cells.LearnLink}}
										<p class="clearfix peopleLinks">
											<a class="learn" href="{{cells.LearnLink}}" alt="Learn more about {{cells.Name}}">learn</a>
											{{#if cells.ApplyLink}}
												<a class="apply" href="{{cells.ApplyLink}}" alt="Apply to be a {{cells.Name}}">apply</a>
											{{/if}}
										</p>
									{{/if}}
								</div><!--/loopText-->
							</article> <!-- end person entry -->
							</script>


						</div> <!-- end #main -->



				</div> <!-- end #inner-content -->

				<?php getMailingList();?>

			</div> <!-- end #content -->


<?php get_footer(); ?>
