import React, { Component } from 'react'
import { Link } from 'react-router-dom'

export default class Admin extends Component {
  render() {
    return (
    <>
    <div className='container-fluid'>
        <div className='container text-center p-5'>
          <p className='text-primary fs-3'>WellCome to Home page...only autorized peoples can see this.</p>
          <Link to='/logout' className="btn btn-primary">Logout</Link>
        </div>
    </div>      
    </>
    )
  }
}
