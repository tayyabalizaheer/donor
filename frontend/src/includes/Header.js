import React from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { Auth } from '../utils/Function';

const Header = () => {

    const navigator = useNavigate();
    const Logout = () => {
        localStorage.setItem('user', '');
        navigator('/');
    }
    console.log(Auth());
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
        
                        <li className="nav-item mr-5">
                            <li className="nav-item">
                                {
                                    Auth() ? (
                                        <>
                                            <Link  className='mr-3 btn btn-primary' to="/profile">profile</Link>
                                            <button className='mr-3 btn btn-danger'  onClick={Logout}>logout</button>
                                        </>
                                    ): (
                                        <Link  className='mr-3 btn btn-success' to="/login">Login</Link>
                                    )

                                }
                                
                            </li>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
    );
};
export default Header;