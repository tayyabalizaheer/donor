import React from 'react';
import {
    BrowserRouter as Router,
    Routes,
    Route,
} from "react-router-dom";
import Home from './home';
import NewProject from './newProject';
import OnGoingProject from './OnGoingProject'; 
import ProjectRehabilitation from './ProjectRehabilitation';
import ProjectMaintenance from './ProjectMaintenance';
import ProjectComplaint from './ProjectComplaint';
import CompletedProject from './CompletedProject';
import Profile from './Profile';
import Login from './Login';
import Reports from './Reports';
import Layout from '../includes/Layout'; 
import MaintenanceDetail from './MaintenanceDetail';
import { AuthMiddleware } from '../middleware/AuthMiddleware';
const Views = () => {
    return (
        <Router>
            <Layout>
                <Routes>
                    <Route exact path="/" element={<Home />} /> 
                    <Route exact path="/new-project" element={<NewProject />} />
                    <Route exact path="/on-going-project" element={<AuthMiddleware ><OnGoingProject /></AuthMiddleware>} />
                    <Route exact path="/completed-project" element={<AuthMiddleware ><CompletedProject /></AuthMiddleware>} />
                    <Route exact path="/project/rehab/:id" element={<AuthMiddleware ><ProjectRehabilitation /></AuthMiddleware>} />
                    <Route exact path="/project/maintenance/:id" element={<AuthMiddleware ><ProjectMaintenance /></AuthMiddleware>} />
                    <Route exact path="/project/complaint/:id" element={<AuthMiddleware ><ProjectComplaint /></AuthMiddleware>} />
                    <Route exact path="/maintenance/details/:id" element={<AuthMiddleware ><MaintenanceDetail /></AuthMiddleware>} />
                    <Route exact path="/reports" element={<AuthMiddleware ><Reports /></AuthMiddleware>} />
                    <Route exact path="/profile" element={<AuthMiddleware ><Profile /></AuthMiddleware>} />
                    <Route exact path="/login" element={<Login />} />
                </Routes>
            </Layout>
        </Router>
    );
};  
export default Views;