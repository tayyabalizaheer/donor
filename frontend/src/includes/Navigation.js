import React from 'react';
import { Link } from 'react-router-dom';
import Logo from '../assets/images/logo.png';

const Navigation = () => {
    return (
        <aside className="left-sidebar" data-sidebarbg="skin6">
            <div className="scroll-sidebar" data-sidebarbg="skin6">
                <nav className="sidebar-nav">
                    <ul id="sidebarnav">
                        <li className="sidebar-item">
                            <Link className="sidebar-link sidebar-link" to='/'>
                                <img src={Logo} alt="homepage" className="dark-logo" />
                            </Link>
                        </li>
                       
                        <li className="sidebar-item"> 
                            <Link className="sidebar-link sidebar-link" to="/">Dashboards</Link>
                        </li>
                        <li className="sidebar-item">
                            <Link className="sidebar-link sidebar-link" to="/new-project">New Interventions</Link>
                        </li>

                        <li className="sidebar-item">
                            <Link className="sidebar-link sidebar-link" to="/on-going-project">On going project</Link>
                        </li>

                        <li className="sidebar-item">
                            <Link className="sidebar-link sidebar-link" to="/completed-project">Completed project</Link>
                        </li>
                        <li className="list-divider"></li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
    );
};
export default Navigation;