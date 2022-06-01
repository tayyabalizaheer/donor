import React, { useEffect, useState } from "react";
const CompletedProject = () => {
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            const url = process.env.REACT_APP_API_URL + "projects/completed";
            const response = await fetch(url );
            const dataJson = await response.json();
            setProjects(dataJson.data);
            console.log(dataJson);
        };
        getProjects();
    }, []);

    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-body">
                        <h4 className="card-title">New Interventions</h4>
                        <h6 className="card-subtitle">Details of site, assessments, requesters, locations, testing reports, budget of upcoming projects.</h6>
                        <h6>API_URL: {process.env.REACT_APP_API_URL}</h6>
                    </div>
                    <div className="table-responsive">
                        <table className="table">
                            <thead className="thead-light">
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>Name </th>
                                    <th scope='col'>Need Assessment</th>
                                    <th scope='col'>Requester</th>
                                    <th scope='col'>District</th>
                                    <th scope='col'>Tehsil</th>
                                    <th scope='col'>Area</th>
                                    <th scope='col'>Water Quality Testing Report</th>
                                    <th scope='col'>Proposal Date</th>
                                    <th scope='col'>Budget Date</th>
                                    <th scope='col'>Approval Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{ project.name }</td>
                                        <td>{ project.assessment }</td>
                                        <td>
                                            Name: {project.requester_user.name} <br></br>
                                            Email: {project.requester_user.email}
                                        </td>
                                        <td>{ project.district }</td>
                                        <td>{ project.tehsil }</td>
                                        <td>{ project.area }</td>
                                        <td>{ project.quality_report }</td>
                                        <td>{ project.proposal_date }</td>
                                        <td>{ project.budget_date }</td>
                                        <td>{ project.approval_date }</td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default CompletedProject;