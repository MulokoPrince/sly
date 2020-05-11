
						<div class="col-lg-6"  style="background: #0e3152; border-radius: 10px 2px 10px 2px; color: white ">
							<div class="central-meta postbox" >
								<span class="create-post">Creer une publication</span>
								<div class="new-postbox" >
									<figure>
										<img src="<?=img_url('resources/admin.jpg')?>" alt="">
									</figure>
									<div class="newpst-input">
										<form method="post">
											<textarea rows="2" placeholder="Partager votre savoir avec le monde exterieur "></textarea>
										</form>
									</div>
									<div class="attachments">
										<ul>
											<li>
												<span class="add-loc">
													<i class="fa fa-map-marker"></i>
												</span>
											</li>
											<li>
												<i class="fa fa-music"></i>
												<label class="fileContainer">
													<input type="file">
												</label>
											</li>
											<li>
												<i class="fa fa-image"></i>
												<label class="fileContainer">
													<input type="file">
												</label>
											</li>
											<li>
												<i class="fa fa-video-camera"></i>
												<label class="fileContainer">
													<input type="file">
												</label>
											</li>
											<li>
												<i class="fa fa-camera"></i>
												<label class="fileContainer">
													<input type="file">
												</label>
											</li>
											<li class="preview-btn">
												<button class="post-btn-preview" type="submit" data-ripple="">Preview</button>
											</li>
										</ul>
										<button class="post-btn" type="submit" data-ripple="">Publier</button>
									</div>
									<div class="add-location-post">
										<span>Drag map point to selected area</span>
										<div class="row">

											<div class="col-lg-6">
												<label class="control-label">Lat :</label>
												<input type="text" class="" id="us3-lat" />
											</div>
											<div class="col-lg-6">
												<label>Long :</label>
												<input type="text" class="" id="us3-lon" />
											</div>
										</div>
										<!-- map -->
										<div id="us3"></div>
									</div>
								</div>	
							</div>
							<!-- add post new box -->

							<div class="central-meta">
								<span class="create-post">Stories Recent <a href="#" title="">Voir tout</a></span>
								<div class="story-postbox">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3">
											<div class="story-box">
												<figure>
													<img src="<?=img_url('resources/story-1.jpg')?>" alt="">
													<span>Ajouter votre storie</span>
												</figure>
												<div class="story-thumb" data-toggle="tooltip" title="ajouter">
													<i class="fa fa-plus"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-3">
											<div class="story-box">
												<figure>
													<img src="<?=img_url('resources/story-2.jpg')?>" alt="">
													<span>Thiery Ndiwiye</span>
												</figure>
												<div class="story-thumb" data-toggle="tooltip" title="Emily grey">
													<img src="<?=img_url('resources/thumb-2.jpg')?>" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3">
											<div class="story-box">
												<figure>
													<img src="<?=img_url('resources/story-3.jpg')?>" alt="">
													<span>Emily grey</span>
												</figure>
												<div class="story-thumb" data-toggle="tooltip" title="Emily grey">
													<img src="<?=img_url('resources/thumb-3.jpg')?>" alt="">
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3">
											<div class="story-box">
												<figure>
													<img src="<?=img_url('resources/story-4.jpg')?>" alt="">
													<span>Jhon Deo</span>
												</figure>
												<div class="story-thumb" data-toggle="tooltip" title="Jhon Deo">
													<img src="<?=img_url('resources/thumb-4.jpg')?>" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="stories-wraper">
										<div class="status-story">
											<span class="close-story"><i class="ti-close"></i></span>
											<div class="row">
												<div class="col-lg-4">
													<div class="stories-users">
														<h5>Stories</h5>
														<div class="my-status">
															<figure><img src="<?=img_url('resources/friend-avatar10.jpg')?>" alt=""></figure>
															<a href="#" title="" class="main-btn">Add New</a>
															<div class="story-user">
																<span>My Story</span>
																<ins>No updates</ins>
															</div>
														</div>
														<ul class="frnds-stories">
															<li>
																<figure><img src="<?=img_url('resources/friend-avatar11.jpg')?>" alt=""></figure>
																<div class="story-user">
																	<span>Anne mul</span>
																	<ins>yesterday</ins>
																</div>
															</li>
															<li>
																<figure><img src="<?=img_url('resources/friend-avatar15.jpg')?>" alt=""></figure>
																<div class="story-user">
																	<span>Anne mul</span>
																	<ins>3 days ago</ins>
																</div>
															</li>
															<li>
																<figure><img src="<?=img_url('resources/friend-avatar12.jpg')?>" alt=""></figure>													<div class="story-user">
																	<span>Anne mul</span>
																	<ins>2 days ago</ins>
																</div>
															</li>
															<li>
																<figure><img src="<?=img_url('resources/friend-avatar13.jpg')?>" alt=""></figure>
																<div class="story-user">
																	<span>Anne mul</span>
																	<ins>1 day ago</ins>
																</div>
															</li>
															<li>
																<figure><img src="<?=img_url('resources/friend-avatar14.jpg')?>" alt=""></figure>
																<div class="story-user">
																	<span>Anne mul</span>
																	<ins>2 days ago</ins>
																</div>
															</li>

															<li>
																<figure><img src="<?=img_url('resources/friend-avatar16.jpg')?>" alt=""></figure>
																<div class="story-user">
																	<span>Anne mul</span>
																	<ins>jan,12 2020</ins>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-lg-8">
													<div id="btns-wrapper"></div>
													<div id="slideshow">
														<img class="slide" src="https://placehold.it/856x380/FF6347/FFFFFF&amp;text=1" alt="11" />
														<img class="slide" src="https://placehold.it/856x380/6FC6F7/FFFFFF&amp;text=2" alt="2" />
														<img class="slide" src="https://placehold.it/856x380/f3e686/FFFFFF&amp;text=3" alt="3" />
														<img class="slide" src="https://placehold.it/856x380/71eea3/FFFFFF&amp;text=4" alt="4" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- top stories -->
							<div class="loadMore">
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="<?=img_url('resources/nearly1.jpg')?>" alt="">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a href="time-line.html" title=""> Bijoux Mul </a> Post Album</ins>
												<span><i class="fa fa-globe"></i> publier: September,15 2020 19:PM </span>
											</div>
											<div class="post-meta">
												<p>
													Souvent on rencontre de bonne personne avivre avec eux dans la vie pour se faire de la joie ma vie elle  est m eilleurs ,
												</p>
												<figure>
													<div class="img-bunch">
														<div class="row">
															<div class="col-lg-6 col-md-6 col-sm-6">
																<figure>
																	<a class="strip" href="<?=img_url('resources/album1.jpg')?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																		<img src="<?=img_url('resources/album1.jpg')?>" alt="">
																	</a>
																</figure>
																<figure>
																	<a class="strip" href="<?=img_url('resources/album2.jpg')?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																		<img src="<?=img_url('resources/album2.jpg')?>" alt="">
																	</a>
																</figure>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6">
																<figure>
																	<a class="strip" href="<?=img_url('resources/album5.jpg')?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																		<img src="<?=img_url('resources/album5.jpg')?>" alt="">
																	</a>
																</figure>
																<figure>
																	<a class="strip" href="<?=img_url('resources/album6.jpg')?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																		<img src="<?=img_url('resources/album6.jpg')?>" alt="">
																	</a>
																</figure>
																<figure>
																	<a class="strip" href="<?=img_url('resources/album4.jpg')?>" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
																		<img src="<?=img_url('resources/album4.jpg')?>" alt="">
																	</a>
																	<div class="more-photos">
																		<span>+15</span>
																	</div>
																</figure>
															</div>
														</div>
													</div>	
													<ul class="like-dislike">
														<li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
														<li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
														<li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
													</ul>
												</figure>	
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
														</li>
														<li>
															<span class="comment" title="Comments">
																<i class="fa fa-commenting"></i>
																<ins>52</ins>
															</span>
														</li>

														<li>
															<span>
																<a class="share-pst" href="#" title="Share">
																	<i class="fa fa-share-alt"></i>
																</a>
																<ins>20</ins>
															</span>	
														</li>
													</ul>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="Anderw" href="#">
															<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="frank" href="#">
															<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Sara" href="#">
															<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Amy" href="#">
															<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Ema" href="#">
															<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
														</a>
														<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
													</div>
												</div>
											</div>
											<div class="coment-area" style="display: block;">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="<?=img_url('resources/nearly3.jpg')?>" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Jason Ndashimwe</a></h5>
															<p>tres tokosoo wow tu merite plus plus</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>

													</li>
													<li>
														<div class="comet-avatar">
															<img src="<?=img_url('resources/comet-4.jpg')?>" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Sophia ngangula</a></h5>
															<p>lova vooooom crazy.
																<i class="em em-smiley"></i>
															</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">plus comments+</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="<?=img_url('resources/comet-4.jpg')?>" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<div class="uploadimage">
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file">
																		</label>
																	</div>
																	<span class="em em-expressionless" title="add icon"></span>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																</div>

																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<!-- album post -->

								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="<?=img_url('resources/comet-4.jpg')?>" alt="">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a href="time-line.html" title="">Digital Market</a></ins>
												<span>sponsored <i class="fa fa-globe"></i></span>

											</div>
											<div class="post-meta">
												<figure>
													<img src="<?=img_url('sponsors.gif')?>" alt="">
													<ul class="like-dislike">
														<li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
														<li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
														<li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
													</ul>
												</figure>	
												<div class="description">
													<a href="#" class="learnmore" data-ripple="">Learn More</a>
													<p>
														Explication interne  nous estimons apprendrev beaucoup quand on dois realiser plusm souvent nous proposons certains de nos servicies pour s'arrichir

													</p>
												</div>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
														</li>
														<li>
															<span class="comment" title="Comments">
																<i class="fa fa-commenting"></i>
																<ins>52</ins>
															</span>
														</li>

														<li>
															<span>
																<a class="share-pst" href="#" title="Share">
																	<i class="fa fa-share-alt"></i>
																</a>
																<ins>20</ins>
															</span>	
														</li>
													</ul>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="Anderw" href="#">
															<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="frank" href="#">
															<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Sara" href="#">
															<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Amy" href="#">
															<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Ema" href="#">
															<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
														</a>
														<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
													</div>
												</div>
											</div>
											<div class="coment-area" style="">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="<?=img_url('resources/nearly3.jpg')?>" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Jason Ndangula</a></h5>
															<p>Explication interne  nous estimons apprendrev beaucoup quand on dois realiser plusm souvent nous proposons certains de nos servicies pour s'arrichir</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>

													</li>
													<li>
														<div class="comet-avatar">
															<img src="<?=img_url('resources/comet-4.jpg')?>" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Sophia valuba</a></h5>
															<p> Paf paf sooonom apo niatari saaana ndangula
																<i class="em em-smiley"></i>
															</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">more comments+</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="i<?=img_url('resources/nearly1.jpg')?>" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<div class="uploadimage">
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file">
																		</label>
																	</div>
																	<span class="em em-expressionless" title="add icon"></span>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																</div>

																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- digital sponsors -->

								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img alt="" src="<?=img_url('resources/friend-avatar10.jpg')?>">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a title="" href="time-line.html">Janice Griffith</a></ins>
												<span>published: june,2 2010 19:PM</span>
											</div>
											<div class="description">
												<p>
													Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> Explication interne  nous estimons apprendrev beaucoup quand on dois realiser plusm souvent nous proposons certains de nos servicies pour s'arrichir
												</p>
											</div>
											<div class="post-meta">
												<div class="linked-image align-left">
													<a title="" href="#"><img alt="" src="<?=img_url('resources/page1.jpg')?>"></a>
												</div>
												<div class="detail">
													<span>Love Maid - HighChill</span>
													<p>Explication interne  nous estimons apprendrev beaucoup quand on dois realiser plusm souvent nous proposons certains de nos servicies pour s'arrichir</p>
													<a title="" href="#">www.sample.com</a>
												</div>		

												<ul class="like-dislike">
													<li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
													<li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
													<li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
												</ul>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
														</li>
														<li>
															<span class="comment" title="Comments">
																<i class="fa fa-commenting"></i>
																<ins>52</ins>
															</span>
														</li>

														<li>
															<span>
																<a class="share-pst" href="#" title="Share">
																	<i class="fa fa-share-alt"></i>
																</a>
																<ins>20</ins>
															</span>	
														</li>
													</ul>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="Anderw" href="#">
															<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="frank" href="#">
															<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Sara" href="#">
															<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Amy" href="#">
															<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Ema" href="#">
															<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
														</a>
														<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
													</div>
												</div>
											</div>
											<div class="coment-area" style="">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="images/resources/nearly3.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<p>Explication interne  nous estimons apprendrev beaucoup quand on dois realiser plusm souvent nous proposons certains de nos servicies pour s'arrichir</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>

													</li>
													<li>
														<div class="comet-avatar">
															<img src="images/resources/comet-4.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Sophia</a></h5>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																<i class="em em-smiley"></i>
															</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">more comments+</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="images/resources/nearly1.jpg" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<div class="uploadimage">
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file">
																		</label>
																	</div>
																	<span class="em em-expressionless" title="add icon"></span>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																</div>

																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- love post -->

								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/friend-avatar10.jpg" alt="">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a href="time-line.html" title="">Mathilda Brinker</a></ins>
												<span>publier: june,2 2020 19:PM</span>
											</div>
											<div class="post-meta">
												<div class="description">
													<p>
														World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
													</p>
												</div>

												<ul class="like-dislike">
													<li><a href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
													<li><a href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
													<li><a href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
												</ul>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
														</li>
														<li>
															<span class="comment" title="Comments">
																<i class="fa fa-commenting"></i>
																<ins>52</ins>
															</span>
														</li>

														<li>
															<span>
																<a class="share-pst" href="#" title="Share">
																	<i class="fa fa-share-alt"></i>
																</a>
																<ins>20</ins>
															</span>	
														</li>
													</ul>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="Anderw" href="#">
															<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="frank" href="#">
															<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Sara" href="#">
															<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Amy" href="#">
															<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Ema" href="#">
															<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
														</a>
														<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
													</div>
												</div>
											</div>
											<div class="coment-area" style="">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="images/resources/nearly3.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>

													</li>
													<li>
														<div class="comet-avatar">
															<img src="images/resources/comet-4.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Sophia</a></h5>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																<i class="em em-smiley"></i>
															</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">more comments+</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="images/resources/nearly1.jpg" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<div class="uploadimage">
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file">
																		</label>
																	</div>
																	<span class="em em-expressionless" title="add icon"></span>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																</div>

																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- without image -->
								
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/nearly6.jpg" alt="">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a href="time-line.html" title="">Sophia</a> shared location</ins>
												<span><i class="fa fa-globe"></i> published: january,5 2010 19:PM</span>
											</div>
											<div class="post-meta">
												<div class="post-map">
													<div class="nearby-map">
														<div id="map-canvas"></div>
													</div>
													<ul class="like-dislike">
														<li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
														<li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
														<li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
													</ul>
												</div><!-- near by map -->

												<div class="description">
													<p>
														Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
													</p>
												</div>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
														</li>
														<li>
															<span class="comment" title="Comments">
																<i class="fa fa-commenting"></i>
																<ins>52</ins>
															</span>
														</li>

														<li>
															<span>
																<a class="share-pst" href="#" title="Share">
																	<i class="fa fa-share-alt"></i>
																</a>
																<ins>20</ins>
															</span>	
														</li>
													</ul>
													<div class="users-thumb-list">
														<a data-toggle="tooltip" title="Anderw" href="#">
															<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="frank" href="#">
															<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Sara" href="#">
															<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Amy" href="#">
															<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
														</a>
														<a data-toggle="tooltip" title="Ema" href="#">
															<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
														</a>
														<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
													</div>
												</div>
											</div>
											<div class="coment-area" style="">
												<ul class="we-comet">
													<li>
														<div class="comet-avatar">
															<img src="images/resources/nearly3.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>

													</li>
													<li>
														<div class="comet-avatar">
															<img src="images/resources/comet-4.jpg" alt="">
														</div>
														<div class="we-comment">
															<h5><a href="time-line.html" title="">Sophia</a></h5>
															<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
																<i class="em em-smiley"></i>
															</p>
															<div class="inline-itms">
																<span>1 year ago</span>
																<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
															</div>
														</div>
													</li>
													<li>
														<a href="#" title="" class="showmore underline">more comments+</a>
													</li>
													<li class="post-comment">
														<div class="comet-avatar">
															<img src="images/resources/nearly1.jpg" alt="">
														</div>
														<div class="post-comt-box">
															<form method="post">
																<textarea placeholder="Post your comment"></textarea>
																<div class="add-smiles">
																	<div class="uploadimage">
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file">
																		</label>
																	</div>
																	<span class="em em-expressionless" title="add icon"></span>
																	<div class="smiles-bunch">
																		<i class="em em---1"></i>
																		<i class="em em-smiley"></i>
																		<i class="em em-anguished"></i>
																		<i class="em em-laughing"></i>
																		<i class="em em-angry"></i>
																		<i class="em em-astonished"></i>
																		<i class="em em-blush"></i>
																		<i class="em em-disappointed"></i>
																		<i class="em em-worried"></i>
																		<i class="em em-kissing_heart"></i>
																		<i class="em em-rage"></i>
																		<i class="em em-stuck_out_tongue"></i>
																	</div>
																</div>

																<button type="submit"></button>
															</form>	
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div><!-- map location post -->
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="images/resources/nearly1.jpg" alt="">
											</figure>
											<div class="friend-name">
												<div class="more">
													<div class="more-post-optns"><i class="ti-more-alt"></i>
														<ul>
															<li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
															<li><i class="fa fa-trash-o"></i>Delete Post</li>
															<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
															<li><i class="fa fa-address-card-o"></i>Boost This Post</li>
															<li><i class="fa fa-clock-o"></i>Schedule Post</li>
															<li><i class="fa fa-wpexplorer"></i>Select as featured</li>
															<li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
														</ul>
													</div>
												</div>
												<ins><a href="time-line.html" title="">Jack Carter</a> share <a href="#" title="">link</a></ins>
												<span><i class="fa fa-globe"></i> published: january,5 2010 19:PM </span>
											</div>
											<div class="post-meta">
												<figure>
													<a href="https://www.youtube.com/watch?v=fF382gwEnG8" title="" data-strip-group="mygroup" class="strip vdeo-link" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
														<img src="images/resources/user-post.jpg" alt="">
														<i>
															<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="55px" width="55px"
															viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
															<path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
															C97.3,23.7,75.7,2.3,49.9,2.5"/>
															<path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
													<h2>Canada tourist spots you must visit in 2020</h2>
												</a>
												<ul class="like-dislike">
													<li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
													<li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
													<li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
												</ul>

											</figure>												
											<div class="description">
												<p>
													Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc.
												</p>
											</div>
											<div class="we-video-info">
												<ul>
													<li>
														<span class="views" title="views">
															<i class="fa fa-eye"></i>
															<ins>1.2k</ins>
														</span>
													</li>
													<li>
														<div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
													</li>
													<li>
														<span class="comment" title="Comments">
															<i class="fa fa-commenting"></i>
															<ins>52</ins>
														</span>
													</li>

													<li>
														<span>
															<a class="share-pst" href="#" title="Share">
																<i class="fa fa-share-alt"></i>
															</a>
															<ins>20</ins>
														</span>	
													</li>
												</ul>
												<div class="users-thumb-list">
													<a data-toggle="tooltip" title="Anderw" href="#">
														<img alt="" src="<?=img_url('resources/userlist-1.jpg')?>">  
													</a>
													<a data-toggle="tooltip" title="frank" href="#">
														<img alt="" src="<?=img_url('resources/userlist-2.jpg')?>">  
													</a>
													<a data-toggle="tooltip" title="Sara" href="#">
														<img alt="" src="<?=img_url('resources/userlist-3.jpg')?>">  
													</a>
													<a data-toggle="tooltip" title="Amy" href="#">
														<img alt="" src="<?=img_url('resources/userlist-4.jpg')?>">  
													</a>
													<a data-toggle="tooltip" title="Ema" href="#">
														<img alt="" src="<?=img_url('resources/userlist-5.jpg')?>">  
													</a>
													<span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
												</div>
											</div>
										</div>
										<div class="coment-area" style="">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="images/resources/nearly3.jpg" alt="">
													</div>
													<div class="we-comment">
														<h5><a href="time-line.html" title="">Jason borne</a></h5>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
														<div class="inline-itms">
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
															<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
														</div>
													</div>

												</li>
												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-4.jpg" alt="">
													</div>
													<div class="we-comment">
														<h5><a href="time-line.html" title="">Sophia</a></h5>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
															<i class="em em-smiley"></i>
														</p>
														<div class="inline-itms">
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
															<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
														</div>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments+</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="images/resources/nearly1.jpg" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<div class="uploadimage">
																	<i class="fa fa-image"></i>
																	<label class="fileContainer">
																		<input type="file">
																	</label>
																</div>
																<span class="em em-expressionless" title="add icon"></span>
																<div class="smiles-bunch">
																	<i class="em em---1"></i>
																	<i class="em em-smiley"></i>
																	<i class="em em-anguished"></i>
																	<i class="em em-laughing"></i>
																	<i class="em em-angry"></i>
																	<i class="em em-astonished"></i>
																	<i class="em em-blush"></i>
																	<i class="em em-disappointed"></i>
																	<i class="em em-worried"></i>
																	<i class="em em-kissing_heart"></i>
																	<i class="em em-rage"></i>
																	<i class="em em-stuck_out_tongue"></i>
																</div>
															</div>
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- video post -->
						</div>
					</div><!-- centerl meta -->
					