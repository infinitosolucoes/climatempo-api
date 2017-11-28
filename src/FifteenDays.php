<?php
namespace AdinanCenci\Climatempo;

class FifteenDays 
{
    protected $slave;

    use Wrapper;

    protected static $map = array(
        'dateBr'                        => '$this->slave->date_br', 
        'minHumidity'                   => '$this->slave->humidity->min', 
        'maxHumidity'                   => '$this->slave->humidity->max', 
        'precipitation'                 => '$this->slave->rain->precipitation', 
        'mm'                            => '$this->slave->rain->precipitation', 

        'pop'                           => '$this->slave->rain->probability', 
        'probabilityOfPrecipitation'    => '$this->slave->rain->probability', 

        'precipitation'                 => '$this->slave->rain->precipitation', 
        'minWindVelocity'               => '$this->slave->wind->velocity_min', 
        'minWind'                       => '$this->slave->wind->velocity_min', 

        'maxWindVelocity'               => '$this->slave->wind->velocity_max', 
        'maxWind'                       => '$this->slave->wind->velocity_max', 

        'avgWindVelocity'               => '$this->slave->wind->velocity_avg', 
        'avgWind'                       => '$this->slave->wind->velocity_avg', 

        'maxGustVelocity'               => '$this->slave->wind->gust_max', 
        'gustMax'                       => '$this->slave->wind->gust_max', 

        'windDegree'                    => '$this->slave->wind->direction_degrees', 
        'windDirectionDegree'           => '$this->slave->wind->direction_degrees', 

        'windDirection'                 => '$this->slave->wind->direction', 

        'dawnIcon'                      => '$this->slave->text_icon->icon->dawn', 
        'morningIcon'                   => '$this->slave->text_icon->icon->morning', 
        'dayIcon'                       => '$this->slave->text_icon->icon->day', 
        'afternoonIcon'                 => '$this->slave->text_icon->icon->afternoon', 
        'nightIcon'                     => '$this->slave->text_icon->icon->night', 
      
        'textPt'                        => '$this->slave->text_icon->text->pt', 
        'textEn'                        => '$this->slave->text_icon->text->en', 
        'textEs'                        => '$this->slave->text_icon->text->es', 

        'reducedText'                   => '$this->slave->text_icon->text->phrase->reduced', 

        'morningText'                   => '$this->slave->text_icon->text->phrase->morning', 
        'afternoonText'                 => '$this->slave->text_icon->text->phrase->afternoon', 
        'nightText'                     => '$this->slave->text_icon->text->phrase->night', 
        'dawnText'                      => '$this->slave->text_icon->text->phrase->dawn', 

        'minTemp'                       => '$this->slave->temperature->min', 
        'maxTemp'                       => '$this->slave->temperature->max', 

        'minMorningTemp'                => '$this->slave->temperature->morning->min', 
        'maxMorningTemp'                => '$this->slave->temperature->morning->max', 

        'minAfternoonTemp'              => '$this->slave->temperature->afternoon->min', 
        'maxAfternoonTemp'              => '$this->slave->temperature->afternoon->max', 

        'temperature'                   => '$this->slave->temperature->temperature', 
        'minNightTemp'                  => '$this->slave->temperature->night->min', 
        'maxNightTemp'                  => '$this->slave->temperature->night->max', 

        'uvMax'                         => '$this->slave->uv->max', 

        'minThermal'                    => '$this->slave->thermal_sensation->min', 
        'minThermalSensation'           => '$this->slave->thermal_sensation->min', 
        'maxThermal'                    => '$this->slave->thermal_sensation->max', 
        'maxThermalSensation'           => '$this->slave->thermal_sensation->max', 
    );

    public function __construct($slave) 
    {
        $this->slave = $slave;
    }
}