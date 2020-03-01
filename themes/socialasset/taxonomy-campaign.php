<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header(); 
$thisID = get_the_ID();
$ccat = get_queried_object();
?>
<div class="has-shadow">
  <section class="user-campaign-list-top-con">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-entry-hdr">
              <h1>Campaigns</h1>
              <p>View all campaigns or sort by category, date lorem ipsum</p>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="campaigns-main-category">
              <ul class="ulc clearfix">
                <li>
                  <div class="campaigns-main-cat-item">
                    <div class="campaigns-main-cat-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-cat-img-01.png);">
                      <h6>Environment <br>Campaigns</h6>
                      <a class="overlay-link" href="#"></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="campaigns-main-cat-item">
                    <div class="campaigns-main-cat-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-cat-img-02.png);">
                      <h6>Animal Planet <br>Campaigns</h6>
                      <a class="overlay-link" href="#"></a>
                    </div>
                  </div>
                </li>
                <li class="cat-active">
                  <div class="campaigns-main-cat-item">
                    <div class="campaigns-main-cat-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-cat-img-03.png);">
                      <h6>Human <br>Campaigns</h6>
                      <a class="overlay-link" href="#"></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="campaigns-main-cat-item">
                    <div class="campaigns-main-cat-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-cat-img-04.png);">
                      <h6>Health <br>Campaigns</h6>
                      <a class="overlay-link" href="#"></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="campaigns-main-cat-item">
                    <div class="campaigns-main-cat-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-cat-img-05.png);">
                      <h6>Education <br>Campaigns</h6>
                      <a class="overlay-link" href="#"></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="campaigns-filters-area clearfix">
              <div class="clearfix campaigns-slect-filters">
                <div class="campaigns-slect-filters-lft">
                  <div class="search-by-name">
                    <input type="search" name="">
                    <button><i class="fas fa-search"></i></button>
                  </div>
                </div>
                <div class="campaigns-slect-filters-rgt">
                  <div class="sa-selctpicker-ctlr">
                    <label>Sort by</label>
                    <select class="selectpicker" data-size="7">
                        <option selected="selected">Trending</option>
                        <option>Trending 1</option>
                        <option>Trending 2</option>
                        <option>Trending 3 </option>
                        <option>Trending 4</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="campaigns-tags">
                <label>by  Hashtag</label>
                <ul class="clearfix ulc">
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                  <li><a href="#">#Test</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
  <section class="user-campaign-list">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="user-campaign-list-cntlr">
            <ul class=" ulc masonry">
              <li class="campaigns-list-item-wrp campaigns-list-item-50">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp no-image">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Salamamina - Oil Spoil </h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Salamamina - Oil Spoil </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp only-des">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet</p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);"></div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>
              <li class="campaigns-list-item-wrp">
                <div class="campaigns-list-item">
                  <div class="campaigns-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/user-campaign-list-img-02.png);">
                  </div>
                  <div class="campaigns-item-des">
                    <div class="campaigns-item-des-inr">
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-item-des-btm">
                        <div>
                          <h6>Clean South Crete</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa.</p>
                        </div>
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="campaigns-list-item-des-hover">
                    <div class="campaigns-list-item-des-hover-inr">
                      <a class="overlay-link" href="#"></a>
                      <div class="campaigns-item-cat-name">
                        <strong>environment</strong>
                        <span>
                          <i class="far fa-heart"></i>
                        </span>
                      </div>
                      <div class="campaigns-list-item-des-hover-des">
                        <h6>Clean South Crete</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit a met, consectetur adip iscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      </div>
                      <div class="campaigns-vote-percentage-hover-bar">
                        <div class="campaigns-vote-info">
                          <div class="campaigns-vote-percentage-bar clearfix">
                            <div class="campaigns-vote-percentage-number"><span>30%</span></div>
                            <div class="campaigns-vote-percentage">
                              <div>
                                <span style="width: 30%"></span>
                              </div>
                            </div>
                          </div>
                          <div class="months-left">
                            <i class="far fa-clock"></i>
                            <span>3 months left</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </li>


            </ul>
            <div class="show-more-btn">
              <a href="#">SHOW MORE</a>
              <span>23 of 62 Campaigns</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
get_footer(); 
?>