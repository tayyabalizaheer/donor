import React from 'react';
import { Link } from 'react-router-dom';
const Header = () => {
    return (
        <header className="topbar" data-navbarbg="skin6">
            {/* <div className="preloader">
                <div className="lds-ripple">
                    <div className="lds-pos"></div>
                    <div className="lds-pos"></div>
                </div>
            </div> */}
            <nav className="navbar top-navbar navbar-expand-md">
                <div className="navbar-header" data-logobg="skin6">
                    <a className="nav-toggler waves-effect waves-light d-block d-md-none" href="#"><i
                            className="ti-menu ti-close"></i></a>
                    
        
                    <a className="topbartoggler d-block d-md-none waves-effect waves-light" href="#"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            className="ti-more"></i></a>
                </div>
                <div className="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav float-left mr-auto ml-3 pl-1">
                        <li className="nav-item">
                            <Link to="/">Home</Link>
                        </li>
               
                        
                    </ul>
                   
                    <ul className="navbar-nav float-right">
        
                        <li className="nav-item">

                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
    );
};
export default Header;