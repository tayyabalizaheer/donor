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
import Login from './Login';
import Reports from './Reports';
import Layout from '../includes/Layout';
import MaintenanceDetail from './MaintenanceDetail';
import { Auth } from '../utils/Function';
import { AuthMiddleware } from '../middleware/AuthMiddleware';
const Views = () => {
    return (
        <Router>
            <Layout>
                <Routes>
                    <Route exact path="/" element={<Home />} /> 
                    <Route exact path="/new-project" element={<NewProject />} />
                    <Route element={<AuthMiddleware auth={Auth()} />} >
                            <Route exact path="/on-going-project" element={<OnGoingProject />} />
                            <Route exact path="/completed-project" element={<CompletedProject />} />
                            <Route exact path="/project/rehab/:id" element={<ProjectRehabilitation />} />
                            <Route exact path="/project/maintenance/:id" element={<ProjectMaintenance />} />
                            <Route exact path="/project/complaint/:id" element={<ProjectComplaint />} />
                            <Route exact path="/maintenance/details/:id" element={<MaintenanceDetail />} />
                            <Route exact path="/reports" element={<Reports />} />
                        </Route>
                    <Route exact path="/login" element={<Login />} />
                </Routes>
            </Layout>
        </Router>
    );
};  
export default Views;