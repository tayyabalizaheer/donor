const NewProject = () => {
    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-body">
                        <h4 className="card-title">Project Reports</h4>
                    </div>
                    <div className="row reports p-5">
                        <ul>
                            <li> New Interventions <a href={process.env.REACT_APP_API_URL + "reports/new"}> Download</a> </li>
                            <li> On going Projects <a href={process.env.REACT_APP_API_URL+"reports/on-going"}> Download</a> </li>
                            <li> Completed Projects <a href={process.env.REACT_APP_API_URL + "reports/completed"}> Download</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default NewProject;