import { Injectable } from '@angular/core';

@Injectable()
export class CourseService {

  constructor() { }
  Id : number  ;
  Name : string;


  public courselist: Object[] = [
    {'Id' : '1', 'Name' : 'Turbin'},
    {'Id' : '2', 'Name' : 'Motor Bakar'},
    {'Id' : '3', 'Name' : 'PKN'}];
    
    

    add() : void {
      
              this.courselist.push({ 
                "Id" : this.Id,
                "Name" : this.Name,
                
               });
        
              
      
      
      
    }

}
