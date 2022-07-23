import React from 'react'
import { Navigate } from 'react-router-dom';
import { Auth } from '../utils/Function';

export const AuthMiddleware = ({children}) => {

    if (!Auth()) {
        return <Navigate to='/login' replace />;
    }

    return children;
};
