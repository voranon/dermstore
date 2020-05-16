import React from 'react';
import ReactDOM from 'react-dom';



class Wheel extends React.Component{
  render(){
    return(
          <div>Wheel</div>
          );
  }
}

function Example() {
   
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">dd5Example Component</div>
                   		<Wheel/>         
                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
