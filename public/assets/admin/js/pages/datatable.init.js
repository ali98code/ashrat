/**
 * Theme: Tailfox - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * File: Datatable Js
 */

const dataTable = new simpleDatatables.DataTable("#datatable_1", {
    searchable: true,
    fixedHeight: false,
    labels: {
        placeholder: "ابحث...",
        perPage: "{select} في الصفحة",
        noRows: "لا يوجد بيانات",
        noResults: "لا يوجد بيانات مطابقة للبحث",
        info: "عرض {start} إلى {end} من {rows} نتيجة"
    },
    layout: {
        top:"{select}{search}",
        bottom: "{info}{pager}"
    }
})

// const dataTable_2 = new simpleDatatables.DataTable("#datatable_2")
document.querySelector("button.csv").addEventListener("click", () => {
    dataTable.export({
        type: "csv",
        download: true,
        lineDelimiter: "\n\n",
        columnDelimiter: ";"
    })
})
// document.querySelector("button.sql").addEventListener("click", () => {
//     dataTable.export({
//         type: "sql",
//         download: true,
//         tableName: "export_table"
//     })
// })
// document.querySelector("button.txt").addEventListener("click", () => {
//     dataTable.export({
//         type: "txt",
//         download: true,
//     })
// })
// document.querySelector("button.json").addEventListener("click", () => {
//     dataTable.export({
//         type: "json",
//         download: true,
//         escapeHTML: true,
//         space: 3
//     })
// })




