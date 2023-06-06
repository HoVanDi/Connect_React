import ShowProduct from "./components/ShowProduct"


const route = [
  {
    path:"/",
    exact: true,
    main:()=><ShowProduct></ShowProduct>
  },

  {
    path:"/admin",
    exact: true,
    main:()=><ShowProduct></ShowProduct>
  }

] 
  

export  {route};
