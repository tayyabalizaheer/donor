import React, { useEffect, useState } from "react";
import { Link, useNavigate } from 'react-router-dom';
import $ from 'jquery';
import { User } from "../utils/Function";

const Login = () => {
    const navigate = useNavigate();
    const [user, setUser] = useState(User());
    const handleLoginSubmit = async (event)=>{
        event.preventDefault();
        const payload = new FormData(event.currentTarget);
        const url = process.env.REACT_APP_API_URL + "profile";
        const response = await fetch(url,{
            headers: {
                'apitoken': user.apitoken,
            },
            method : 'POST',
            body: payload
        });
        const dataJson = await response.json();
        if (response.status === 200) localStorage.setItem('user', JSON.stringify(dataJson.data));
        else if (response.status === 403) {
            localStorage.setItem('user', '');
            navigator('/');
        }
        console.log(dataJson);
    }
    
    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-header">
                        <h4 className="card-title">Profile</h4>
                    </div>
                    <div className="card-body">
                        <div className="row justify-content-center">
                            <div className="col-12 col-md-6">
                                <form onSubmit={handleLoginSubmit}>
                                    <div className="mb-3">
                                        <img src={user.profile_path} width="200px" alt="" />
                                        <input type="file" className="form-control" id="profile" name="profile"/>
                                    </div>
                                    <div className="mb-3">
                                        <label className="form-label" htmlFor="fullname">Full Name</label>
                                        <input type="text" className="form-control" id="fullname" placeholder="John Doe" name="name" defaultValue={user.name}/>
                                    </div>
                                    <div className="mb-3">
                                        <label className="form-label" htmlFor="email">Email</label>
                                        <div className="input-group input-group-merge">
                                            <input type="text" id="email" className="form-control" name="email" defaultValue={user.email}/>
                                        </div>
                                        <div className="form-text">You can use letters, numbers &amp; periods</div>
                                    </div>
                                    <div className="mb-3">
                                        <label className="form-label" htmlFor="mobile">mobile No</label>
                                        <input type="text" id="mobile" className="form-control" name="mobile" defaultValue={user.mobile}/>
                                    </div>

                                    <div className="mb-3">
                                        <label className="form-label" htmlFor="address">Address</label>
                                        <input type="text" id="address" className="form-control" name="address" defaultValue={user.address}/>
                                    </div>
                                    <div className="mb-3">
                                        <label className="form-label" htmlFor="password">password</label>
                                        <input type="text" id="password" className="form-control" name="password"/>
                                        <button type="submit" className="btn btn-primary">Submit</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
    );
};
export default Login;