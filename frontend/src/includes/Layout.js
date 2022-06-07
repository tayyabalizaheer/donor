import React from 'react';
import Header from './Header';
import Footer from './Footer';
import Navigation from './Navigation';
const Layout = ({ children }) => {
    return (
        <React.Fragment>
            <Header />
            <div className="navigationWrapper">
                <Navigation />
                <div className="page-wrapper">
                    <div className=''>
                        {children}
                    </div>
                    <Footer />
                </div>
            </div>
        </React.Fragment>
    );
};
export default Layout;