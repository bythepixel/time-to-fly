# Todo
- Migrations
  - Weather Station
    - id
    - lat
    - lng
    - city
    - state
    
  - Weather
    - id
    - weather_station_id (FK)
    - observation_time
    - temperature
    - wind_string
    - wind_direction
    - wind_degrees
    - wind_speed
    - wind_gust_speed
    - feels_like_temperature
    - visibility
    - uv
    - conditions
- Seeds
  - Weather Stations
  - Weather
  
# Stretch Goals
- Migrations
  - Users
    - id
    - email
    - phone
    - first_name
    - last_name
    
  - Lookups
    - id
    - users_id
    - lat
    - lng
