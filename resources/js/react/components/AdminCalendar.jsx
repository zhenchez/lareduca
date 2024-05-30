import React from "react";

import FullCalendar from "@fullcalendar/react";
import dayGridPlugin from "@fullcalendar/daygrid"; // a plugin!
import interactionPlugin from "@fullcalendar/interaction" // needed for dayClick

const AdminCalendar = () => {
    const handleDateClick = (arg) => {
        alert(arg.dateStr)
      }
    return (
        <FullCalendar
        plugins={[ dayGridPlugin, interactionPlugin ]}
        dateClick={handleDateClick}
      />
    );
};

export default AdminCalendar;
