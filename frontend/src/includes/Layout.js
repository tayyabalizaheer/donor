import React from 'react';
import Header from './Header';
import Navigation from './Navigation';
const Layout = ({ children }) => {
    return (
        <React.Fragment>
            <Header />
            <div className="navigationWrapper">
                <Navigation />
                <div className="page-wrapper">
                    <div className='container-fluid'>
                        {children}
                    </div>
                </div>
            </div>
        </React.Fragment>
    );
};
export default Layout;