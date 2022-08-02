import React, {Component} from 'react';
import { Route, Switch, Link, Routes } from 'react-router-dom';
import './App.css';
import Login from './components/Login';
import Logout from './components/Logout';
import Admin from './components/Admin';


class App extends Component{
  render() {
    return(
      <Routes>
          <Route path='/' element={<Login />} />
          <Route path='/admin' element={<Admin />}/>
          <Route path='/logout' element={<Logout />}/>
      </Routes>        
    );
  }
}



const A = () => {
  return (
    <div className='teax-center'>
      <div className='container'>
        <p className='text-primary'>
          Well Come To Login Page
        </p>
      </div>
    </div>
  );
}

export default App;
