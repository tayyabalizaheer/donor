import React from 'react';
import { Link } from 'react-router-dom';
import LogoFundraiser from '../assets/images/logo-fundraisingregulator.png';
const Footer = () => {
    return (
        <footer className="_primary-footer _theme-blue _pf-ramadan">
            <div className="container-fluid">
                <hr className="_divider-ramadan"/>
                    <div className="col-lg-14 col-lg-offset-1">
                        <div className="row  hidden-xs">
                            <nav className="col-sm-3 col-md-3">
                                <h3 className="_nav-title">Appeals</h3>
                                <ul className="list-unstyled">
                                    <li><a href="https://muslimhands.org.uk/zakat" title="Zakat">Zakat</a></li>
                                    <li><a href="https://muslimhands.org.uk/appeals/syria-crisis" title="Syria Crisis">Syria
                                        Crisis</a></li>
                                    <li><a href="https://muslimhands.org.uk/appeals/yemen-emergency-appeal"
                                        title="Yemen Emergency">Yemen Emergency</a></li>
                                    <li><a href="https://muslimhands.org.uk/appeals/the-blessed-lands" title="Blessed Lands">Blessed
                                        Lands</a></li>
                                    <li><a href="https://muslimhands.org.uk/appeals/masjid-al-aqsa" title="Dome of the Rock">Dome of
                                        the Rock</a></li>
                                    <li><a href="https://muslimhands.org.uk/appeals" title="All Appeals">All Appeals</a></li>
                                </ul>
                            </nav>
                            <nav className="col-sm-3 col-md-3">
                                <h3 className="_nav-title">Our Work</h3>
                                <ul className="list-unstyled">
                                    <li><a href="https://muslimhands.org.uk/our-work/orphans" title="Orphans">Orphans</a></li>
                                    <li><a href="https://muslimhands.org.uk/our-work/water" title="Water">Water</a></li>
                                    <li><a href="https://muslimhands.org.uk/our-work/education" title="Education">Education</a></li>
                                    <li><a href="https://muslimhands.org.uk/our-work/hunger" title="Hunger">Hunger</a></li>
                                    <li><a href="https://muslimhands.org.uk/our-work/health" title="Health">Health</a></li>
                                    <li><a href="https://muslimhands.org.uk/our-work/major-giving" title="Major Giving">Major
                                        Giving</a></li>
                                </ul>
                            </nav>
                            <nav className="col-sm-3 col-md-3">
                                <h3 className="_nav-title">Get Involved</h3>
                                <ul className="list-unstyled">
                                    <li><a href="https://muslimhands.org.uk/events" title="Events">Events</a></li>
                                    <li><a href="https://muslimhands.org.uk/get-involved" title="Volunteer">Volunteer</a></li>
                                    <li><a href="https://www.facebook.com/MuslimHands" target="_blank" title="Facebook">Facebook</a>
                                    </li>
                                    <li><a href="https://twitter.com/muslimhandsuk" target="_blank" title="Twitter">Twitter</a></li>
                                    <li><a href="https://instagram.com/muslimhandsuk" title="Instagram">Instagram</a></li>
                                    <li><a href="https://www.youtube.com/user/muslimhandsuk" target="_blank"
                                        title="YouTube">YouTube</a></li>
                                </ul>
                            </nav>
                            <nav className="col-sm-3 col-md-3">
                                <h3 className="_nav-title">Latest</h3>
                                <ul className="list-unstyled">
                                    <li><a href="https://muslimhands.org.uk/latest" title="News and Updates">News and Updates</a>
                                    </li>
                                    <li><a href="https://muslimhands.org.uk/latest/galleries" title="Galleries">Galleries</a></li>
                                    <li><a href="https://muslimhands.org.uk/latest/videos" title="Videos">Videos</a></li>
                                    <li><a href="https://muslimhands.org.uk/latest/articles" title="All Articles">All Articles</a>
                                    </li>
                                </ul>
                            </nav>
                            <nav className="col-sm-3 col-md-3">
                                <h3 className="_nav-title">About Us</h3>
                                <ul className="list-unstyled">
                                    <li><a href="https://muslimhands.org.uk/about-us" title="About Us">About Us</a></li>
                                    <li><a href="https://muslimhands.org.uk/contact-us" title="Contact Us">Contact Us</a></li>
                                    <li><a href="https://muslimhands.org.uk/where-we-work" title="Where We Work">Where We Work</a>
                                    </li>
                                    <li><a href="https://muslimhands.org.uk/ways-to-give" title="Ways to Give">Ways to Give</a></li>
                                    <li><a href="https://muslimhands.org.uk/about-us/our-history" title="Our History">Our
                                        History</a></li>
                                    <li><a href="https://muslimhands.org.uk/vacancies" title="Vacancies">Vacancies</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div className="_logos text-right">
                            <ul className="list-inline list-unstyled">
                                <li>
                                    <a href="https://www.fundraisingregulator.org.uk/" target="_blank"
                                    title="Fundraising Regulator"> <img src={LogoFundraiser}
                                            alt="Fundraising Regulator" className="__retina-img __lazyloaded"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>

            <div className="container-fluid">
                <div className="col-lg-14 col-lg-offset-1">
                    <div className="_copyrights-area">
                        <div className="row">
                            <div className="col-md-5 _copyright-msg">
                                <p>Copyright © 2022 Muslim Hands. All rights reserved.</p>
                            </div>
                            <div className="col-md-7 _copyright-links">
                                <ul className="list-unstyled list-inline">
                                    <li>148 Gregory Boulevard, Nottingham, NG7 5JE.</li>
                                    <li>Registered Charity No. 1105056 / Registered Company No. 05080486 in England.</li>
                                </ul>
                                <ul className="list-unstyled list-inline">
                                    <li><a href="https://muslimhands.org.uk/privacy-and-security">Privacy and Security</a></li>
                                    <li><a href="https://muslimhands.org.uk/terms-and-conditions">Terms and Conditions</a></li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    );
};
export default Footer;