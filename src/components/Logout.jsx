import React, { Component } from 'react'
import { Link } from 'react-router-dom'

export default class Logout extends Component {
    render() {
        return (
        <>    
            <div className='container-fluid'>
                <div className='container text-center p-5'>
                    <p className='text-primary fs-3'>You have been successfully Logged Out.</p>
                    <Link to='/' className="btn btn-primary">Log In</Link>
                </div>
            </div>
        </>    
        )
    }
}
