import {BrowserRouter as Router, Routes, Route} from 'react-router-dom';
import React from 'react';
import Login from './pages/Login';
import Reg from './pages/Reg';
import Profile from './pages/profile';


export default function App(){
  return (
    <Router>
      <Routes>
        <Route path='/' element={<Login/>}/>
        <Route path='/reg' element={<Reg/>}/>
        <Route path='/profile' element={<Profile/>}/>
        
      </Routes>
    </Router>
    
    // <div className="App">
    //   <Login />
    // </div>
    
  )
}


