
window.addEventListener('load',() => {
    const form = document.querySelector('#new_task_form');
    const input = document.querySelector('#new_task_input');
    const date = document.querySelector('#dates');
    const text_area = document.querySelector('#tarea');
    const list_elements = document.querySelector("#tasks");
    form.addEventListener("submit",(e) => {
        e.preventDefault();
        
        const tasks = input.value;
        const tasks_des = text_area.value;
        const dates = date.value;

        if (!tasks) {
            alert("Please fill out the title of the task");
            return;
        }

        if (!tasks_des) {
            alert("Please fill out the Description");
            return;
        }

        if (!dates) {
            alert("Please set the deadline");
            return;
        }

        const task_element = document.createElement("div");
        task_element.classList.add("tasks");

        const task_content_element = document.createElement("div");
        task_content_element.classList.add("content");

        task_element.appendChild (task_content_element);

        const task_input_element = document.createElement("input");
        task_input_element.classList.add("text","date","tarea");
        task_input_element.type = "text";
        
        const task_value = `${dates}      ${tasks}             ${tasks_des}`;
        task_input_element.value = task_value;
        task_input_element.setAttribute("readonly","readonly","readonly");
        task_content_element.appendChild(task_input_element);

        const task_actions_element = document.createElement("div");
        task_actions_element.classList.add("actions");

        const task_edit_element = document.createElement("button");
        task_edit_element.classList.add("edit");
        task_edit_element.innerHTML = "Edit";

        const task_del_element = document.createElement("button");
        task_del_element.classList.add("delete");
        task_del_element.innerHTML = "Delete";

        task_actions_element.appendChild(task_edit_element);
        task_actions_element.appendChild(task_del_element);

        task_element.appendChild(task_actions_element);

        list_elements.appendChild(task_element);

        input.value="";
        date.value='';
        text_area.value='';

        task_edit_element.addEventListener("click",() => {
            if (task_edit_element.innerText.toLocaleLowerCase() == "edit") {
                task_input_element.removeAttribute('readonly');
                task_input_element.focus();
                task_edit_element.innerText = "Save";
            }
            else{
                task_input_element.setAttribute("readonly","readonly");
                task_edit_element.innerText = "Edit";
            }
            
        });
        task_del_element.addEventListener("click", () => {
            list_elements.removeChild(task_element);
        });
    });
});

