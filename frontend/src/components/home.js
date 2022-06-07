import React from 'react';
import { Link } from 'react-router-dom';
import completedImage from '../assets/images/completed.png';
import newImage from '../assets/images/new.png';
import onGoingImage from '../assets/images/on-going.png';
const Home = () => {
    return (
        <div  className="row dasboard justify-content-center align-items-center">
            <div  className="col-lg-8 col-12">
                <Link className="row" to="/new-project">
                    <div  className="col-2">
                        <img className="icons" src={newImage} alt=""></img>
                    </div>
                    <div  className="col-9">
                        <h2>New Interventions</h2>
                        <div  className="description">
                            Details of site, assessments, requesters, locations, testing reports, budget of upcoming projects.
                        </div>
                    </div>
                </Link>
            </div>

            <div  className="col-lg-8 col-12">
                <Link className="row" to="/on-going-project" >
                    <div  className="col-2">
                        <img className="icons" src={onGoingImage} alt=""></img>
                    </div>
                    <div  className="col-9">
                        <h2>on going projects</h2>
                        <div  className="description">
                            Details of locations, date, supervisors and coordinators of on going projects.
                        </div>
                    </div>
                </Link>
            </div>

            <div  className="col-lg-8 col-12">
                <Link className="row" to="/completed-project" >
                    <div  className="col-2">
                        <img className="icons" src={completedImage} alt=""></img>
                    </div>
                    <div  className="col-9">
                        <h2>Completed projects</h2>
                        <div  className="description">
                            Details of locations, installation date, installed duration, re-habilation date, maintenance of completed projects.
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    );
};
export default Home;