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
import Reports from './Reports';
import Layout from '../includes/Layout';
import MaintenanceDetail from './MaintenanceDetail';
const Views = () => {
    return (
        <Router>
            <Layout>
                <Routes>
                    <Route exact path="/" element={<Home />} /> 
                    <Route path="/new-project" element={<NewProject />} />
                    <Route path="/on-going-project" element={<OnGoingProject />} />
                    <Route path="/completed-project" element={<CompletedProject />} />
                    <Route path="/project/rehab/:id" element={<ProjectRehabilitation />} />
                    <Route path="/project/maintenance/:id" element={<ProjectMaintenance />} />
                    <Route path="/project/complaint/:id" element={<ProjectComplaint />} />
                    <Route path="/maintenance/details/:id" element={<MaintenanceDetail />} />
                    <Route path="/reports" element={<Reports />} />
                </Routes>
            </Layout>
        </Router>
    );
};  
export default Views;