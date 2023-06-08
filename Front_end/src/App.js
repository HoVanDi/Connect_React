// import React from 'react';
import './App.css';
import Index from './components/Index';
import { Routes,Route} from "react-router-dom";
// import ShowProduct from './components/ShowProduct';
import ShowTiki from './components/ShowTiki';
import Home from './components/Home';



function App() {
  return (
    <div>
      <Index></Index>
      {/* <ShowProduct></ShowProduct> */}
      {/* <ShowTiki></ShowTiki> */}
      <Routes>
                <Route exact path='/Home' element={<Home/>}></Route> 
                <Route path='/ShowTiki' element={<ShowTiki/>}></Route>

        </Routes>
    </div>
  );
}

export default App;