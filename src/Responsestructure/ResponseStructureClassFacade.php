<?php
  
namespace Onex\Responsestructure\Responsestructure;
  
use Illuminate\Support\Facades\Facade;
  
class ResponseStructureClassFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    { 
        return 'responsestructureclass'; 
    }
}