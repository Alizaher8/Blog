<template>
    <div class="notification-bell" @click="toggleDropdown">
        <i class="fa fa-bell"></i>
        <span class="notification-badge" v-text="countNotify"></span>
        <div class="notification-dropdown" v-if="showDropdown">
            <ul>
                <li v-for="(notification, index) in allNotifications" :key="index">
                    {{ typeof notification === 'object' ? Object.values(notification)[0] : notification }} is registered

                </li>
            </ul>


        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            showDropdown: false,

            databaseNotifications: [],
            realTimeNotifications: [],
        };
    },

    mounted() {
        axios.get("/api/notify").then((response) => {
           this.databaseNotifications = response.data;
            // const originalArray = [...proxyArray];
           console.log(this.databaseNotifications);
        });

        Echo.channel("UserRegisters").listen("UserRegister", (e) => {
            // Extract the user_id from the event data
            // const realUserId = Reflect.get(e, 'user_id');
            // // Create a new notification object with the real-time data
            // const realTimeData = {
            //   user_id: realUserId
            //   // Add other properties as needed
            // };
            // Add the real-time notification to the realTimeNotifications array
            this.realTimeNotifications.push(e);
            console.log(e);
        });
    },

    computed: {
        allNotifications() {
            return [...this.databaseNotifications, ...this.realTimeNotifications];
        },
        countNotify() {
            return this.allNotifications.length;
        },
    },
    watch: {
        realTimeNotifications: {
            handler: function (newNotifications) {
                // When real-time notifications change, update the allNotifications array
                this.$nextTick(() => {
                    this.updateAllNotifications();
                });
            },
            deep: true
        }

    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },
        updateAllNotifications() {
            // Update the allNotifications array when real-time notifications change
            this.allNotifications = [...this.databaseNotifications];
            if (Array.isArray(this.realTimeNotifications)) {
                this.allNotifications = [...this.allNotifications, ...this.realTimeNotifications];
            }
        }

    },
};
</script>

<style>
/* Notification bell button */
.notification-bell {
    position: relative;
    display: inline-block;
    margin-right: 20px;
}

/* Bell icon style */
.notification-bell i {
    font-size: 20px;
    color: #333;
    /* Change color to your preference */
    cursor: pointer;
}

/* Notification counter badge */
.notification-badge {
    position: absolute;
    top: -10px;
    right: -13px;
    background-color: #00ccff0c;
    /* Change color to your preference */
    color: #fff;
    /* Change color to your preference */
    font-size: 15px;
    font-weight: bold;
    padding: 3px 6px;
    border-radius: 50%;
}

/* Notification dropdown */
.notification-dropdown {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 100;
    /* Adjust z-index as needed */
    border-radius: 5px;
    overflow: hidden;
    width: 200px;
    /* Adjust width as needed */
}

/* Notification dropdown list */
.notification-dropdown ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Notification dropdown list item */
.notification-dropdown li {
    padding: 12px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Notification dropdown list item hover effect */
.notification-dropdown li:hover {
    background-color: #f5f5f5;
    color: #333;
    /* Change color to your preference */
}</style>
