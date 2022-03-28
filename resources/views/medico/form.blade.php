Name:
<input type="text" name="name" id="name" value="{{ isset($medico->name)?$medico->name:'' }}" />
Area:
<input type="text" name="area" id="area" value="{{ isset($medico->area)?$medico->area:'' }}" />
Patient:
<input type="text" name="patient" id="patient" value="{{ isset($medico->patient)?$medico->patient:'' }}" />
Recipe:
<input type="text" name="recipe" id="recipe" value="{{ isset($medico->recipe)?$medico->recipe:'' }}" />
Date:
<input type="text" name="date" id="date" value="{{ isset($medico->date)?$medico->date:'' }}" />

<button type="submit">Save</button>
