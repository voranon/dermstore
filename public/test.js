


class SteeringWheel extends React.Component{
  render(){
    return(
          <div>
            <div>{this.props.type}</div> 
            <div>{this.props.status}</div> 
            <div onClick={() => this.props.onClick('left')}>Turn Left</div>
            <div onClick={() => this.props.onClick('right')}>Turn Right</div>
            <div onClick={() => this.props.onClick('center')}>Center</div>
          </div>
          );
  }
}

class Wheel extends React.Component{
  render(){
    return(
          <div>{this.props.status}</div>
          );
  }
}


class Car extends React.Component{

  constructor(props){
    super(props);
    this.state={
                wheels:[
                        {status:'center'},
                        {status:'center'},
                        {status:'center'},
                        {status:'center'},
                      ],
                steeringwheel:{status:'center',type:'power'},
               }
  }

  renderWheel(i){
    return(
            <Wheel status={this.state.wheels[i].status}/>
          );
  }

  renderSteeringWheel(){
    
    return(
            <SteeringWheel 
              type={this.state.steeringwheel.type}
              status={this.state.steeringwheel.status}
              onClick={(direction) => this.turn(direction)}
            />
          );
  }
  
  turn(direction){
    
    const wheels = this.state.wheels.slice();
    if(direction==='left'){
      wheels[0].status='left';
      wheels[1].status='left';
      this.setState({
        wheels:wheels,
        steeringwheel:{status:'left',type:'power'}
      });
    }else if(direction==='right'){
      wheels[0].status='right';
      wheels[1].status='right';
      this.setState({
        wheels:wheels,
        steeringwheel:{status:'right',type:'power'}
      });
    }else{
      wheels[0].status='center';
      wheels[1].status='center';
      this.setState({      
        wheels:wheels,
        steeringwheel:{status:'center',type:'power'}
      });
    }



  }

  render(){
    
    return(
      <div>
        
        <label>Front left</label>
        <div>{this.renderWheel(0)}</div>
        <br></br>
        <label>Front right</label>
        <div>{this.renderWheel(1)}</div>
        <br></br>
        <label>Rear left</label>
        <div>{this.renderWheel(2)}</div>
        <br></br>
        <label>Rear right</label>
        <div>{this.renderWheel(3)}</div>
        <br></br>
        <label>Steering Wheel</label>
        <div>{this.renderSteeringWheel()}</div>
        <br></br>
      </div>
    );
  }

}





 ReactDOM.render(
    <Car/>,
    document.getElementById('root')
);



  
  